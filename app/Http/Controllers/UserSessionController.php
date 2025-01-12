<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSessionController extends Controller
{
    public function create()
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the admin using the 'web' guard
        if (Auth::guard('web')->attempt($attributes)) {
            request()->session()->regenerate();
            return redirect('/user/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function destroy()
    {
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/user/login');
    }
}