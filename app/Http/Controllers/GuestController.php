<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;

class GuestController extends Controller
{
    public function index()
    {
        $data=Complain::with('user')->get();
        return view('Guest')->with(compact('data'));
    }
}
