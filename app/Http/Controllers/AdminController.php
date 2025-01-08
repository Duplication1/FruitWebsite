<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $attributes = $request->validate([
            'email' => 'required|email|unique:admins,email',
            'name'  => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password before storing it
        $attributes['password'] = Hash::make($attributes['password']);

        $admin = Admin::create($attributes);

        Auth::login($admin);

        return redirect('/admin');
    }
}