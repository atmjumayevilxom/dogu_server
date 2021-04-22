<?php

use App\Models\Product;
use App\Models\Category;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [StaticController::class, 'home']);
Route::get('/company', [StaticController::class, 'company']);
Route::get('/proect', [StaticController::class, 'proect']);
Route::get('/servis', [StaticController::class, 'servis']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/products/{id}', [ProductController::class, 'show']);




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
