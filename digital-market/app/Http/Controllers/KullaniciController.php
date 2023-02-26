<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class KullaniciController extends Controller
{
    public function register()
    {
        return view('user.user_register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:255'],
        ]);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success', 'Registration successfull.');
    }

    public function login()
    {
        return view('user.user_login');
    }

    public function checkDB()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Logged in!');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Email or password is not found.',
            ]);
        }
    }
}