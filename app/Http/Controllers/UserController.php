<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function daftar(Request $request)
    {
        $password = Hash::make($request->password);
        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'=> $password,
        ]);

        return redirect('/login_user')->with('success', 'berhasil');
    }

    public function login_page()
    {
        return view('login');
    }

    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); 
            
            return redirect()->intended('/')->with('success-login', 'Login Berhasil!');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout', 'Ter-Logout');
    }
}
