<?php

namespace App\Http\Controllers\Admin;

use App\Models\Complain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminHomepageController extends Controller
{
    public function eshow()
    {
        return view('GovHomePage');
    }
    public function addvote($id)
    {
        $table = Complain::find($id);
        $table->Vote += 1;
        $table->save();
        return redirect('civiconnect/homepage');
    }
    public function show()
    {
        $data = Complain::orderBy('Vote', 'desc')->get();
        $datas = compact('table');
        return view('GovtHomePage')->with($datas);
    }
}
