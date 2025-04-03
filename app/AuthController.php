<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Import Session

class AuthController extends Controller
{
    public function register(Request $request)
    {
        Log::info('Sign Up process started', ['email' => $request->email]);

        // Validation
        $validated = $request->validate([
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'localisation' => 'required|string|max:255',
        ]);

        Log::info('Data validated successfully', ['validated_data' => $validated]);
        Log::info('Attempting to create user', ['email' => $validated['email']]);

        // Create the user
        $user = User::create([
            'name' => $validated['nickname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'localisation' => $validated['localisation'],
        ]);

        Session::flash('success', 'Compte créé avec succès! Veuillez vous authentifier.');

        return redirect()->route('signin');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }
}

