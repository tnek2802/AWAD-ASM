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
            'username' => 'required|unique:users,username',
            'contactchg' => 'required|unique:users,contact_num'
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $req->usernamechg;
        $data->contact_num = $req->contactchg;
        $data->save();
        return back()->with('editDetail', true);
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