<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function show($id) {
        $category = Category::find($id);
        return view('category-detail', compact('category'));
    }
}
