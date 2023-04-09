<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($request);
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/success');
        }
        // if ($guard == "user" && Auth::guard($guard)->check()) {
        //     return redirect('/success');
        // }
        if (Auth::guard($guard)->check()) {
            return redirect('/success');
        }
        return $next($request);
    }
}