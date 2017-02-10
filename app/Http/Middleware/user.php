<?php

namespace App\Http\Middleware;

use Closure;

class user
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
         if(\Auth::check() && \Auth::user()->role == 'admin' || \Auth::check() && \Auth::user()->role == 'user'){
            return $next($request);
        } else{
            return redirect('/');
        }
    }
}
