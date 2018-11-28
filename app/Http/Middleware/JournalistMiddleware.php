<?php

namespace App\Http\Middleware;

use Closure;

class JournalistMiddleware
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


        if($request->user() && $request->user()->role != 'journalist'){
            return response("You're not a Journalist. LEAVE", 302);
        }


        return $next($request);
    }
}
