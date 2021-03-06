<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->roles == 'ADMIN'){
            return $next($request);
        }
        return redirect('/');
    }
}
