<?php

namespace App\Http\Middleware;

use Closure;
use Composer\DependencyResolver\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request , Closure $next , $guard = 'admin')
    {



        if (!Auth::guard($guard)->check()) {
            toast('You Must Login First','warning');
            return redirect('admin/login');
        }
        return $next($request);

    }

}
