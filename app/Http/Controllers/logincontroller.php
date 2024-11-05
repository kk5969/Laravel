<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login_form(){
        return '<h1> This is a Login page </h1>';
    }
}
