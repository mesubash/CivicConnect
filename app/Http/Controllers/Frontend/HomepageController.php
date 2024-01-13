<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Complain;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function show()
    {
        $data = Complain::all();
        $datas = compact('data');
        return view('HomePage')->with($datas);
    }
    public function complain()
    {
        return view('Complain');
    }
    public function complainstore(Request $request)
    {
        $table = new Complain;
        $filename = $request->Name . '.' . $request->file('Photo')->getClientOriginalExtension();
        $request->file('Photo')->storeAs(public_path('Uploads', $filename));
        $table->Name = $request->Name;
        $table->Description = $request->Description;
        $table->Photo = $filename;
        $table->Vote = 0;
        $table->save();
        return redirect('civiconnect/homepage');
    }
}
