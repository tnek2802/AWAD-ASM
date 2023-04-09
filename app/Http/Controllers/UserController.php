<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function preLoads()
    {
        // $profileId = Auth::guard('web')->user()->id;
        // $data = User::find($profileId);
        // return view('profile.profilelanding', ['userdata' => $data]);
        $user = Auth::user();
        return view('profilelanding', compact('user'));
    }
    public function editDetail(User $user, Request $req)
    {
        // $this->validate($req, [
        //     'contactchg' => 'required|unique:users,contact_num',
        // ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $req->usernamechg;
        $data->contact_num = $req->contactchg;
        $data->save();
        return redirect('/profile');
    }

    public function editAddress(User $user, Request $req)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->address = $req->addresschg;
        $data->save();
        return redirect('/profile');
    }

    public function editEmail(User $user, Request $req)
    {
        $this->validate($req, [
            'emailchg' => 'required|unique:users,email',
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->email = $req->emailchg;
        $data->save();
        return redirect('/profile');
    }
    public function editPassword(User $user, Request $req)
    {
        $this->validate($req, [
            'oldpassword' => 'required',
            'password' => 'confirmed|max:8|different:password',
        ]);

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->password = bcrypt($req->passchg);
        $data->save();
        return redirect('/profile');
    }
}