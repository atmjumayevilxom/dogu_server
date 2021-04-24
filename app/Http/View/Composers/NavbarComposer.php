<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class NavbarComposer
{
    public function compose(View $view)
    {
        $featuredCategories = Category::where('featured', true)
            ->get()
            ->load(['products'])
            ->translate(session()->get('locale'));

        $regularCategories = Category::where('featured', false)
            ->get()
            ->load(['products'])
            ->translate(session()->get('locale'));

        $view->with('context', (object) [
            'featured' => $featuredCategories,
            'regular' => $regularCategories
        ]);
    }
}
