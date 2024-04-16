<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use App\Repositories\UserRepository;
use App\Repositories\ComplainRepository;

class UserController extends Controller
{
    public function __construct(UserRepository $userRepository,ComplainRepository $complainRepository)
    {
      $this->userRepository=$userRepository;
      $this->complainRepository=$complainRepository;
    }
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
          //   ->addColumn('action',function()
          // {
          //   $actionBtn='<a href="" class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i></a>';
          //   return $actionBtn;
          // })
            // ->rawColumns(['action'])
            ->make(true);
        }
        return view('Admin.User.index');

    }
    public function view($id)
    {
      $user=$this->userRepository->find($id);
      $complain=$this->complainRepository->findByUserId($id);
      return view('Admin.User.view',compact('user','complain'));
    }

}