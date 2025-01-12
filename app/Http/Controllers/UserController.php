<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $attributes = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name'  => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password before storing it
        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/user/login');
    }
}