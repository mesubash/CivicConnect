<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationContorller extends Controller
{
    public function user()
    {
        return view("User.Register");
    }
}
