<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMarketing
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
        if(session('utype') === "USR" || session('utype') === "MKT"){
            return redirect()->route('admin.errors');
        }else{
            return $next($request);
        }
        return $next($request);
    }
}
