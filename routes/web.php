<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Route::view('/', 'welcome');
require __DIR__ . '/auth.php';

Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::get('/shopping', [IndexController::class, 'shopping'])
    ->name('shopping');
Route::view('/blog', 'blog')
    ->name('blog');
Route::view('/about', 'about')
    ->name('about');

Route::middleware(['auth'])->group(function () {
    Route::prefix('manage')->group(function () {
        Route::get('/', [AdminController::class, 'index'])
            ->name('manage.index');
        Route::get('/products', [AdminController::class, 'products'])
            ->name('manage.product');
        Route::get('/shops', [AdminController::class, 'shops'])
            ->name('manage.shop');
        Route::get('/thumbnail', [AdminController::class, 'thumbnail'])
            ->name('manage.thumbnail');
        Route::get('/users', [AdminController::class, 'users'])
            ->name('manage.user');
    });
    Route::view('profile', 'profile')
        ->name('profile');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/{shop:slug}/{product:slug}', [IndexController::class, 'show'])
    ->name('show');
Route::get('/{shop:slug}', [IndexController::class, 'shop'])
    ->name('shop');
