<?php

namespace App\Http\Middleware;

use Closure;

class ReporterMiddleware
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

        if($request->user() && $request->user()->role != 'reporter'){
            return response("You're not a Reporter. GET out", 302);
        }

        return $next($request);
    }
}
