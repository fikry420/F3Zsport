<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Logika autentikasi (sederhana, misal dengan username 'admin' dan password 'password')
        if ($request->username === 'admin' && $request->password === 'password') {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }
}
