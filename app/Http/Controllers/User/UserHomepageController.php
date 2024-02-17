<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Complain;

use Illuminate\Http\Request;

class UserHomepageController extends Controller
{

    public function show()
    {
        // $data = Complain::all();
        // $datas = compact('data');
        // return view('UserHomePage')->with($datas);
        return view('User.UserHomePage');
    }
    public function complain()
    {
        return view('Complain');
    }
    public function complainstore(Request $request)
    {
        $table = new Complain;
        $filename = $request->Name . '.' . $request->file('Photo')->getClientOriginalExtension();
        $request->file('Photo')->move(public_path('Uploads', $filename));
        $table->Name = $request->Name;
        $table->Description = $request->Description;
        $table->Photo = $filename;
        $table->Vote = 0;
        $table->save();
        return redirect('civiconnect/homepage');
    }
}
