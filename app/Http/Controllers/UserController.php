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
            'contactchg' => 'required|unique:users,contact_num|min:11|max:14|numeric'
        ], [
                'usernamechg.unique' => 'The username has has already been registered',
                'contactchg.unique' => 'The contact number has already been registered',
                'contactchg.min' => 'The contact number is too Short, include country code',
                'contactchg.max' => 'The contact number is too long',
                'contactchg.numeric' => 'only numbers allowed'
            ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $req->usernamechg;
        $data->contact_num = $req->contactchg;
        $data->save();
        return redirect(route('profile'))->with('status', "Details editted successfully");
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
        return redirect(route('profile'))->with('status', "Address editted successfully!");
    }

    public function editEmail(User $user, Request $req)
    {
        $this->validate($req, [
            'emailchg' => 'required|unique:users,email|email',
        ], [
            'emailchg.unique' => 'The Email has already been registered',
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->email = $req->emailchg;
        $data->save();
        return redirect(route('profile'))->with('status', "Email editted successfully!");
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
        return redirect(route('profile'))->with('status', "Password editted successfully!");
    }
}