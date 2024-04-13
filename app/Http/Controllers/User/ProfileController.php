<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ComplainRepository;
use Illuminate\Support\Facades\Auth;
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
}
