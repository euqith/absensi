<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan sudah ada model User atau sesuaikan dengan model yang digunakan

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
{
    // Validasi data yang dikirimkan
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Mengecek kredensial
    $user = User::where('username', $request->username)->first();

    if ($user && $user->isactive == 1 && $user->isdeleted == 1 && password_verify($request->password, $user->password)) {
        // Set session jika login berhasil
        session(['user_id' => $user->id, 'username' => $user->username]);
        
        // Redirect ke /dashboard setelah login berhasil
        return redirect('/dashboard'); 
    }

    return back()->withErrors(['login' => 'Username atau password salah!']); // Jika gagal login
}


    // Logout
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
