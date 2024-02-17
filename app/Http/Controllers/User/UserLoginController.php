<?php

namespace App\Http\Controllers\User;

use App\Models\register;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discription;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('User.UserLogin');
    }
    public function register()
    {
        return view('User.UserRegister');
    }
    public function post(Request $request)
    {
        $request->validate(
            [
                'Name' => 'required',
                'Email' => 'required|email|unique:registers',
                'PhotName' => 'required|mimes:jpg,png,jpeg',
                'Password' => 'required'
            ]

        );
        $filename = $request->Name . '.' . $request->file('PhotName')->getClientOriginalExtension();
        $request->file('PhotName')->move(public_path('Uploads', $filename));
        $table = new register;
        $table->Name = $request->Name;
        $table->Email = $request->Email;
        $table->Password = Hash::make($request->Password);
        $table->PhotName = $filename;
        $table->save();
        return redirect('civiconnect/login')->with('Success', 'Registered Sucessfully,Now You can proceed to login');
    }
    public function Check(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required'
        ]);
        $data = register::where('Email', $request->Email)->get();
        if (Hash::check($request->Password, $data[0]->Password)) {
            return view('UserHomepage');
        } else {
            return redirect()->back()->withErrors(['Email' => "Email didn't match", 'Password' => "Password did'nt match"]);
        }
    }
}
