@extends('layouts.dashboard')

@section('main')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-8 max-w-3xl">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
            <form action="{{ route('account/update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="w-full">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Lengkap
                        </label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan nama lengkap" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            (Opsional)</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('email', $user->email) }}" placeholder="e.g example@gmail.com">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username" placeholder="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('username', $user->username) }}" required>
                        @error('username')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            Hp (Opsional)</label>
                        <input type="text" name="no_hp" id="no_hp" placeholder="08xx-xxxx-xxxx"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('no_hp', $user->no_hp) }}">
                        @error('no_hp')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                            (Opsional)</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('alamat', $user->alamat) }}">
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Role</label>
                        <select id="role" name="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            @if (old('role', $user->role) == 'USER')
                                <option value="USER" selected>Pengguna</option>
                                <option value="ADMIN">Petugas</option>
                            @elseif(old('role', $user->role) == 'ADMIN')
                                <option value="USER">Pengguna</option>
                                <option value="ADMIN" selected>Petugas</option>
                            @elseif($user->role == 'SUPERADMIN')
                                <option value="SUPERADMIN">Super Admin</option>
                            @else
                                <option value="USER">Pengguna</option>
                                <option value="ADMIN">Petugas</option>
                            @endif
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="desa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa
                            (Opsional)</label>
                        <input type="text" name="desa" id="desa" placeholder="Masukkan desa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('desa', $user->desa) }}">
                        @error('desa')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="kecamatan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan
                            (Opsional)</label>
                        <input type="text" name="kecamatan" id="kecamatan" placeholder="Masukkan kecamatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('kecamatan', $user->kecamatan) }}">
                        @error('kecamatan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="kabupaten"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten
                            (Opsional)</label>
                        <input type="text" name="kabupaten" id="kabupaten" placeholder="Masukkan kabupaten"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('kabupaten', $user->kabupaten) }}">
                        @error('kabupaten')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="provinsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi
                            (Opsional)</label>
                        <input type="text" name="provinsi" id="provinsi" placeholder="Masukkan provinsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('provinsi', $user->provinsi) }}">
                        @error('provinsi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password (Opsional
                            Update)</label>
                        <input type="password" name="password" id="password" placeholder="******"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            (Opsional)</label>
                        <input name="image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="image" type="file" accept="image/jpeg, image/png">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">Oops!</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <a href="{{ route('account') }}"
                    class="mt-4 text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                    Kembali
                </a>
                <button type="submit"
                    class="mt-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                    Simpan
                </button>
            </form>
        </div>
    </section>
@endsection
