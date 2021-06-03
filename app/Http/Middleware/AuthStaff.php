<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthStaff
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
        if(session('utype') === "USR" || session('utype') === "STF"){
            return redirect()->route('admin.errors');
        }else{
            return $next($request);
        }
        return $next($request);
    }
}
