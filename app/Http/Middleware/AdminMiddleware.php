<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Response;
class AdminMiddleware
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
        if (Auth::check() && Auth::user()->access == 4) {
            return $next($request);
        }
        else if(Auth::check() && Auth::user()->status == 0){
            return redirect('/redirect')->with('message', 'Please wait until admin recognize you as an alumni of Paloc Elementary School');
        }
        else {
            return redirect('/alumni-feeds');
        }
        
    }
}
