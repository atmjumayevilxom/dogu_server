<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);
        $segments = $request->segments();

        if (session()->has('locale')) {
            if (session()->get('locale') != $locale) {
                $segments[0] = session()->get('locale');

                return redirect()->to(implode('/', $segments));
            }

            app()->setLocale(session()->get('locale'));
        } else {
            if (!in_array($locale, config('app.available_locales'))) {
                $segments[0] = config('app.fallback_locale');

                return redirect()->to(implode('/', $segments));
            }

            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
        return $next($request);
    }
}
