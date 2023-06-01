<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $credintials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt($credintials)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are Logged in succefully');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
