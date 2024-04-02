<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data=User::latest()->get();
            return DataTables::of($data)
          ->addColumn('id',function($data)
          {
            return $data->id;
          })
          ->addColumn('name',function($data)
          {
            return $data->name;
          })
          ->addColumn('email',function($data)
          {
            return $data->email;
          })
            ->addColumn('action',function()
          {
            $actionBtn='<a href="#" class="btn btn-danger">Edit</a>';
            return $actionBtn;
          })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('Admin.User');

    }

}