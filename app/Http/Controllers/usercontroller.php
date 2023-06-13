<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{

    public function profile()
    {
        $profile = Auth::user();

        return view('siswa.profile', [
            'profile' => $profile,
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.register');

    }

    public function login_user(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:8|max:16',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Terjadi kesalahan pada informasi yang anda berikan. <br> Silahkan cek <b>username</b> dan <b>password</b> yang anda masukkan!');
    }

    public function user_register(Request $request)
    {
// Validasi data pendaftaran
        $validatedData = $request->validate([
            'no_user' => 'nullable|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|unique:users|min:6',
            'jenis_akun' => 'required',
        ]);

        $user = User::create([

            'no_user' => isset($validatedData['no_user']) ? $validatedData['no_user'] : null,
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'jenis_akun' => $validatedData['jenis_akun'],
        ]);

        // Buat akun pengguna baru
        // $user = new User;
        // $user->name = $request->input('nama');
        // $user->email = $request->input('email');
        // $user->password = bcrypt($request->input('password'));
        // $user->save();

        // // Tambahkan informasi siswa ke dalam tabel siswa
        // $siswa = new siswa;
        // $siswa->NIS = $request->input('nis');
        // $siswa->Nama_Siswa = $request->input('nama');
        // // ... tambahkan kolom-kolom siswa lainnya
        // $siswa->save();

        // Redirect ke halaman login setelah berhasil mendaftar
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');

    }

}
