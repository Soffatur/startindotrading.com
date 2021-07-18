<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function doLogin(Request $request) {
        $request->validate([
            'email'     => 'required|string|max:255',
            'password'  => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

        $attemp = Auth::attempt($credentials);

        if ($attemp) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Email atau Password anda salah, silahkan coba lagi !');
        }
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
