<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ComplainRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{   public function __construct(ComplainRepository $complainRepository)
    {
        $this->complainRepository=$complainRepository;
    }
    public function index($user_id)
    {  
        $data=$this->complainRepository->findByUserId($user_id);
        return view('User.Profile')->with(compact('data'));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->phone_number = $request->phone_number;
        $user->email=$request->email;
        if ($request->hasFile('p_photo')) 
        {
            if($user->p_image)
            {
                $image_path=public_path('profile_photo/') . $user->p_image;
                if(File::exists($image_path))
                {
                    File::delete($image_path);
                }
            }
           $filename = Carbon::now()->format('Y-m-d H:i:s').'-'.Auth::user()->id .'-'.Auth::user()->name. '.' . $request->file('p_photo')->getClientOriginalExtension();
            $request->file('p_photo')->move(public_path('profile_photo'), $filename);
            $user->p_image=$filename;
        }
        $user->save();
        return response()->json();
    }
}
