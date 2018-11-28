<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

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


        if($request->user() && $request->user()->role != 'administrator'){
            return response("You're not an Admin. Peace out", 302);
        }


        return $next($request);
    }
}
