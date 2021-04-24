<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id)->translate(app()->getLocale());
        return view('product', compact('product'));
    }
}
