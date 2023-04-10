<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function preLoads()
    {
        $user = Auth::user();
        return view('profilelanding', compact('user'));
    }

    public function preLoadsDetail()
    {
        $user = Auth::user();
        return view('editProfile', compact('user'));
    }

    public function preLoadsAddress()
    {
        $user = Auth::user();
        return view('editAddress', compact('user'));
    }

    public function preLoadsEmail()
    {
        $user = Auth::user();
        return view('editEmail', compact('user'));
    }

    public function preLoadsPassword()
    {
        $user = Auth::user();
        return view('editPassword', compact('user'));
    }

    public function editDetail(User $user, Request $req)
    {
        $this->validate($req, [
            'usernamechg' => 'required|unique:users,username',
            'contactchg' => 'required|unique:users,contact_num|min:11|max:14'
        ], [
                'usernamechg.unique' => 'The Username Has Already Been Taken',
                'contactchg.unique' => 'The Contact Number Has Already Been Registered',
                'contactchg.min' => 'The Contact Number Is Too Short, Include Country Code'
            ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $req->usernamechg;
        $data->contact_num = $req->contactchg;
        $data->save();
        return redirect(route('profile'));
    }

    public function editAddress(User $user, Request $req)
    {
        $this->validate($req, [
            'addresschg' => 'required'
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->address = $req->addresschg;
        $data->save();
        return redirect(route('profile'));
    }

    public function editEmail(User $user, Request $req)
    {
        $this->validate($req, [
            'emailchg' => 'required|unique:users,email|email',
        ], [
            'emailchg.unique' => 'The Email Has Already Been Taken',
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->email = $req->emailchg;
        $data->save();
        return redirect(route('profile'));
    }
    public function editPassword(User $user, Request $req)
    {
        $this->validate($req, [
            'password' => 'required|confirmed|min:8',
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->password = bcrypt($req->password);
        $data->save();
        return redirect(route('profile'));
    }
}