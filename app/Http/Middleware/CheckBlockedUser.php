<?php

namespace App\Http\Middleware;

use Closure;

class CheckBlockedUser
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
        if($request->user()->blocked) {
            return redirect()->route('me.blocked');
        }
        else {
            return $next($request);
        }
    }
}
