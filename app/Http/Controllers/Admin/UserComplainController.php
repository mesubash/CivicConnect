<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Complain;
use App\Repositories\ComplainRepository;
class UserComplainController extends Controller
{   
    protected $complainRepository;
    public function __construct(ComplainRepository $complainRepository)
    {
        $this->complainRepository=$complainRepository;
    }
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data=Complain::latest()->get();
            return DataTables::of($data)
            ->addColumn('complain_id',function($data)
            {
                return $data->complain_id;
            })
            ->addColumn('name',function($data)
            {
                return $data->name;
            })
            ->addColumn('title',function($data)
            {   
                return $data->title;
            })
            ->addColumn('category',function($data)
            {
                return $data->category;
            })
            ->addColumn('problem',function($data)
            {
                return $data->problem;
            })
            ->addColumn('User_id',function($data)
            {
                return $data->user_id;
            })
            ->addColumn('image',function($data)
            {
                return $data->image;
            })
            // ->addColumn('action',function($data)
            // {
            //     $action='<a href="admin/complao'.$data->user_id.'" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>';
            //     return $action;
            // })
            // ->rawColumns(['action'])
            ->make(true);
        }
        return view("Complain.index");
    }

    public function view($complain_id)
    { 
        $data=$this->complainRepository->findByComplainId($complain_id);
        return view('Complain.view')->with(compact('data'));
    }
  
}
