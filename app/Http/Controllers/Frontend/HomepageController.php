<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Discription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // public function show()
    // 
    //     return view('Package.Navbar');
    // }
    public function complain()
    {
        return view('Complain');
    }
    public function complainstore(Request $request)
    {
        $request->validate([s
}
