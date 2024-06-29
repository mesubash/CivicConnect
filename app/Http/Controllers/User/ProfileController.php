<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Local_level;
use Illuminate\Http\Request;
use App\Repositories\ComplainRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\Profile;
use App\Models\Province;

class ProfileController extends Controller
{   public function __construct(ComplainRepository $complainRepository)
    {
        $this->complainRepository=$complainRepository;
    }
    public function index($id)
    {  
        if(request()->ajax())
        {
            $districts=District::where('province_id',$id)->get();
            $local_level=Local_level::where('district_id',$id)->get();
            return response()->json(['districts'=>$districts,'local_levels'=>$local_level]);
        }
        $data=$this->complainRepository->findByUserId($id);
        $provinces=Province::all();
        return view('User.Profile')->with(compact('data','provinces'));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->phone_number = $request->phone_number;
        $user->email=$request->email;
        $user->province=$request->province;
        $user->district=$request->district;
        $user->local_level=$request->local_level;
        $user->address=$request->address;
        $user->ward_no=$request->ward;
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
    public function single_profile($user_id,Request $request)
    {
        if(request()->ajax())
        {
           $get_action=$request->input('action');
           if($get_action == 'follow')
           {
            Auth::user()->followings()->attach($user_id);
            return response()->json(['message'=>'succesfully followed']);
           }
           if($get_action == 'unfollow')
           {
            Auth::user()->followings()->detach($user_id);
            return response()->json(['message'=>'Unfollowed']);
           }
        }   
        $user=User::find($user_id);
        $complains=$this->complainRepository->findByUserId($user_id);
        $following_ids = Profile::where('user_id',Auth::user()->id)->pluck('following_id')->toArray();
        return view('Admin.User.single_profile')->with(compact('complains','user','following_ids'));   
    }
}