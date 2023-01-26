<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show login form
    public function index()
    {
        return view('users.index');
    }

    // Show create/register form
    public function create()
    {
        return view('users.create');
    }

    // Create new user
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formData['password'] = bcrypt($formData['password']);

        // Create user
        $user = User::create($formData);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }

    // Log in user
    public function authenticate(Request $request)
    {
        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You have successfully logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->onlyInput('email');
    }

    // Log out user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
}
