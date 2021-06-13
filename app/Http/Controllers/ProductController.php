<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $product = Product::find($request->id)->translate(app()->getLocale());
        return view('product', compact('product'));
    }
}
