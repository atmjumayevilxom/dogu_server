<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
        $featuredCategories = Category::where('featured', true)
            ->get()
            ->load(['products'])
            ->translate(app()->getLocale());

        $unfeaturedCategories = Category::where('featured', false)
            ->get()
            ->load(['products'])
            ->translate(app()->getLocale());

        View::share('categories', (object) [
            'featured' => $featuredCategories,
            'unfeatured' => $unfeaturedCategories
        ]);
    }
}
