<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        $search = request('search');

        $users = User::latest();

        if ($search) {
            $users->where('name', 'like', '%' . $search . '%');
        }

        return view('pages/account/index', [
            'title' => 'Identitas/Akun',
            'users' => $users->paginate(15),
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'no_hp' => 'nullable|max:255|unique:users',
            'email' => 'nullable|max:255|unique:users',
            'alamat' => 'nullable|max:255',
            'desa' => 'nullable|max:255',
            'kecamatan' => 'nullable|max:255',
            'kabupaten' => 'nullable|max:255',
            'provinsi' => 'nullable|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('account')->with('error', $validator->errors()->first());
        }

        $validatedData = $validator->validated();

        if ($request->image) {
            $validatedData['image'] = config('app.base') . $request->file('image')->store('user');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('account')->with('success', 'Akun telah ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('pages.account.update', [
            'title' => 'Update Identitas/Akun',
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'role' => 'required',
            'alamat' => 'nullable|max:255',
            'desa' => 'nullable|max:255',
            'kecamatan' => 'nullable|max:255',
            'kabupaten' => 'nullable|max:255',
            'provinsi' => 'nullable|max:255',
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|max:255|unique:users';
        }

        if ($request->no_hp != $user->no_hp) {
            $rules['no_hp'] = 'nullable|max:255|unique:users';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'nullable|max:255|unique:users';
        }

        if ($request->password) {
            $rules['password'] = 'required|string|min:6';
        }

        if ($request->file('image')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($user->image) {
                $url = $user->image;
                $desiredString = Str::after($url, 'storage/');
                Storage::delete($desiredString);
            }
            $validated['image'] = config('app.base') . $request->file('image')->store('user');
        }

        $user->update($validated);

        return redirect()->route('account')->with('success', 'Akun berhasil diubah.');
    }

    public function delete(Request $request)
    {
        User::destroy($request->id);

        return redirect()->route('account')->with('success', 'Akun telah dihapus.');
    }
}
