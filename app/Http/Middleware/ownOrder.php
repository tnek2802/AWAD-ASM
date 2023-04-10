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

         $user_id = $request->route('userid');

        if ($user_id == auth()->id()) {
            // Redirect the user to the orderdetails route with the authenticated user's ID
            return redirect()->route('orderdetails', ['userid' => auth()->id()]);
        }

        // User ID is verified, continue with the request
        return $next($request);
    }
}
