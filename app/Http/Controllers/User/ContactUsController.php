<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ContactUsController extends Controller
{
    public function index(Request $request,$user_id)
    {
        $user_infos=User::find($user_id);
        return view("User.ContactUs")->with(compact('user_infos'));
    }
}
