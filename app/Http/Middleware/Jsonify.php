<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Jsonify
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
        // Always expect JSON in the API.
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
