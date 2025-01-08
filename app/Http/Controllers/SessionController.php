<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the admin using the 'web' guard
        if (Auth::guard('admin')->attempt($attributes)) {
            request()->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/admin');
    }
}