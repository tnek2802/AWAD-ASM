<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //it redirects to here when login success
    // protected $redirectTo = '/success';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin') ->except('logout');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if (Auth::user()->role() == 'admin') {
                    return redirect('/admin');
                }
                if (Auth::user()->role() == 'user') {
                    return redirect('/success');
                }
            } else {
                return back()->withErrors(['email' => 'Invalid email or password.'])->withInput($request->only('email'));
            }
        } else {
            return back()->withErrors(['email' => 'Invalid email or password.'])->withInput($request->only('email'));
        }
    }

    // public function showAdminLoginForm()
    // {
    //     return view('auth.login', ['url' => 'admin']);
    // }
    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //     'email' => 'required|email',
    // 'password' => 'required|min:4'
    // ]);
    // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
    //     return redirect()->intended('/admin');
    // }
    // return back()->withInput($request->only('email', 'remember'));
    // }
}
