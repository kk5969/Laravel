<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Import the User model
use Illuminate\Support\Facades\Hash;  // Import Hash for password encryption

class RegistrationController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('registration');
    }

    // Handle the registration logic
    public function store(Request $request)
    {
        // Validate form data
        $validated_data = $request->validate([
            'name' => 'required|regex:/^[A-Z]+$/i|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
        ]);

        // Create new user
        User::create([
            'name' => $validated_data['name'],
            'email' => $validated_data['email'],
            'password' => Hash::make($validated_data['password']),  // Hash the password before storing
        ]);

        // Redirect back to the registration page with a success message
        return redirect()->back()->with('success', 'Registration Successful');
    }
}
