<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        if(Auth::user()->username != 'firdian_r' || Auth::user()->username != 'lifeatkaling'){
            abort(403);
        }

        return view('register.index', [ 
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:40',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:40'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Daftar Berhasil! Akun baru siap digunakan.');

        return redirect('/login')->with('success', 'Daftar Berhasil! Akun baru siap digunakan.');
    }

    public function edit(){
        return view('register.edit', [ 
            'title' => 'Change Password',
        ]);
    }

    public function update(Request $request){
        // Validate the incoming request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Kata Sandi Saat Ini Salah']);
        }

        // Update the user's password
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Redirect back with a success message
        return redirect('/dashboard')->with('success', 'Kata Sandi berhasil di ubah');
    }
}
