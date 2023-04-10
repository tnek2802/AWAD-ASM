<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ownOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //get userid from cartcontroller
        $user_id = $request->route('userid');

        if ($user_id == auth()->id()) {
            // Redirect the user to the orderdetails route with the authenticated user's ID
            return $next($request);
        } else
            return redirect('/');
        // User ID is verified, continue with the request

    }
}