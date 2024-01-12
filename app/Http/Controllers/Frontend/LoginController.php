<?php

namespace App\Http\Controllers\Frontend;

use App\Models\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
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
        $request->file('PhotName')->store(public_path('uploads', $filename));
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
            return view('Homepage');
        } else {
            return redirect()->back()->withErrors(['Email' => "Email didn't match", 'Password' => "Password did'nt match"]);
        }
    }
}
