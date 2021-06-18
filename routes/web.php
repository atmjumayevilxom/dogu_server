<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MailController;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [LocaleController::class, 'redirect']);

Route::prefix('{locale}')->middleware('set.locale')->group(function () {
    Route::get('/', [StaticController::class, 'home'])->name('home');
    Route::get('/company', [StaticController::class, 'company'])->name('company');
    Route::get('/project', [StaticController::class, 'project'])->name('project');
    Route::get('/service', [StaticController::class, 'service'])->name('service');
    Route::get('/video', [StaticController::class, 'video'])->name('video');

    Route::prefix('/categories')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('/featured', [CategoryController::class, 'index_featured'])->name('index_featured');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
    });

    Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
});

Route::post('/locale', [LocaleController::class, 'store'])->name('set.locale');
Route::post('/send-mail/callback', [MailController::class, 'callbackAdded'])->name('mail.post.callback');
