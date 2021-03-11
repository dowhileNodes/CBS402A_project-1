<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictIpAddressMiddleware{
    // Blocked IP addresses
    public $restrictedIp = ['110.54.139.202','localhost'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array($request->ip(), $this->restrictedIp)) {
            return response()->json('You do not have permission to use this website.');
        }
        return $next($request);
    }     
}
