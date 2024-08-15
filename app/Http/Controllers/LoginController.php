<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [ 
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // public function authenticate(Request $request): RedirectResponse
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required|min:8|max:40'
    //     ]);

    //     $user = \App\Models\User::where('email', $credentials['email'])->first();

    //     if (!$user) {
    //         return back()->with('loginError', 'Email tidak terdaftar!');
    //     }

    //     if (!Auth::attempt($credentials)) {
    //         return back()->with('loginError', 'Kata sandi salah!');
    //     }

    //     $request->session()->regenerate();

    //     return redirect()->intended('dashboard');
    // }

    public function authenticate(Request $request): RedirectResponse
    {
        $start_time = microtime(true);  // Mulai waktu

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:40'
        ]);

        $user = \App\Models\User::where('email', $credentials['email'])->first();
        if (!$user) {
            Log::info('Email tidak terdaftar', ['email' => $credentials['email']]);
            return back()->with('loginError', 'Email tidak terdaftar!');
        }

        if (!Auth::attempt($credentials)) {
            Log::info('Kata sandi salah', ['email' => $credentials['email']]);
            return back()->with('loginError', 'Kata sandi salah!');
        }

        $request->session()->regenerate();

        $end_time = microtime(true);  // Akhir waktu
        $execution_time = $end_time - $start_time;  // Menghitung waktu eksekusi
        Log::info('Waktu eksekusi proses login', ['execution_time' => $execution_time]);

        return redirect()->intended('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout Berhasil ! Sampai bertemu kembali.');
    }
}
