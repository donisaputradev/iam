<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        if ($request->image) {
            $validatedData['image'] = config('app.base') . $request->file('image')->store('user');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('account')->with('success', 'Akun telah ditambahkan');
    }
}
