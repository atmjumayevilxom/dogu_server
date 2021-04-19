<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/categories', function () {
    $categories = Category::get();
    return view('categories', compact('categories'));
});

Route::get('/categories/{id}', function($id) {
    $category = Category::find($id);
    return view('category-detail', compact('category'));
});

Route::get('/products/{id}', function($id) {
    $product = Product::find($id);
    return view('product-detail', compact('product'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});