<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {


            switch ($guard) {
                case 'webAdmin':
                //if Auth is an admin
                    if (Auth::guard($guard)->check()) {
                        $home = 'admin/dashboard';
                    }
                    break;
                default:
                //if the Auth user is not an admin
                    if (Auth::guard($guard)->check()) {
                        $home = 'user/dashboard';
                    }
            }
            return redirect($home);
        }

        return $next($request);
    }
}
