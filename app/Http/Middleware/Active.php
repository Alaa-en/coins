<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\user;

class Active
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->active) {

            return redirect()->route('login');
        }
            return $next($request);


    }
}
