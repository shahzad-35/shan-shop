<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('logged_in')) {
            $next($request);
        }
        return response()->json(['messages' => 'Please Login to access this route'], 401);
    }
}
