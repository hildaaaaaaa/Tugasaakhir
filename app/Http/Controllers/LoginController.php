<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

}