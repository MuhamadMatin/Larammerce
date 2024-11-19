<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;

// Route::view('/', 'welcome');
require __DIR__ . '/auth.php';

Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::get('/shopping', [IndexController::class, 'shopping'])
    ->name('shopping');
Route::view('/blog', 'blog')
    ->name('blog');

Route::middleware(['auth'])->group(function () {
    Route::prefix('manage')->name('manage.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])
            ->name('index');
        Route::resource('/category', CategoryController::class);
        Route::resource('/products', ProductController::class);
        Route::resource('/shops', ShopController::class);
        Route::resource('/thumbnail', ThumbnailController::class);
        Route::resource('/users', UserController::class);
    });
    Route::view('/profile', 'profile')
        ->name('profile');
    Route::get('/cart', [IndexController::class, 'cart'])
        ->name('cart');
    Route::get('/saved', [IndexController::class, 'saved'])
        ->name('saved');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/{shop:slug}/{product:slug}', [IndexController::class, 'show'])
    ->name('show');
Route::get('/{shop:slug}', [IndexController::class, 'shop'])
    ->name('shop');
