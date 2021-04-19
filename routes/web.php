<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


Route::get('/', [StaticController::class, 'home']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/products/{id}', [ProductController::class, 'show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});