<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\ComplainRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function __construct(ComplainRepositoryInterface $complainRepository)
    {   
        $this->complainRepository=$complainRepository;
    }
    public function index()
    {
        return view('User.Complain');
    }
    public function store(Request $request)
    {
        $requestData=[];
        $requestData['name']=Auth::user()->name;
        $requestData['title']=$request->title;
        $requestData['category']=$request->category;
        $requestData['problem']=$request->problem;
        if ($request->hasFile('image')) 
        {
            $filename = Carbon::now()->format('Y-m-d H:i:s').'-'.Auth::user()->id .'-'.Auth::user()->name. '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('image'), $filename);
            $requestData['image'] = $filename; 
        }
        $requestData['user_id']=Auth::user()->id;
        $this->complainRepository->create($requestData);
        return redirect()->back();
    }
}
