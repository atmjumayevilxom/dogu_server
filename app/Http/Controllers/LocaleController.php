<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocaleController extends Controller
{
    public function store(Request $request)
    {
        $locale = $request->locale;
        $segments = $request->segments();

        if (!in_array($locale, config('app.available_locales'))) {
            $segments[0] = config('app.fallback_locale');

            return redirect()->to(implode('/', $segments));
        }

        $oldLocale = session()->get('locale');
        $prevUrl = session()->get('_previous')['url'];
        session()->put('locale', $locale);

        return redirect()->to(Str::replaceFirst($oldLocale, $locale, $prevUrl));
    }
}
