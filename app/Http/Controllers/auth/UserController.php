<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $kredensial = $request->only('email', 'password');

        if(Auth::attempt($kredensial)) {
            return redirect()->intended('/home');
        }

        return redirect()->back()->withErrors([
            'email' => 'Email nya salah, coba lagi',
            'password' => 'Password nya salah, coba lagi',
        ]);
    }
}
