<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        app()->setLocale($request->locale);
        dd(app()->getLocale());
        return $response;
    }
}
