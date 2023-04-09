<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function preLoads()
    {
        $profileId = Auth::guard('web')->user()->id;
        $data = User::find($profileId);
        // dd($user);
        return view('profile.profilelanding', ['userdata'=>$data]);
    }

    public function editDetail(){
        
    }
}