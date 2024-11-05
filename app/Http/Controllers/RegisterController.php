<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required | regex:/^[A-Z]+$/i|string|max:255',
            'email' => 'required | email |unique:users, email',
            'phone' => 'nullable | numeric',
            'dob' => 'required | date | before:-18 years',
            'password' => 'required | string | min : 8 | max : 255 | confirmed',
            'image' => 'required | image | mimes: jpeg, png, gif, jpg | max:2048',
        ]);

        return $validated_data;
    }
}
