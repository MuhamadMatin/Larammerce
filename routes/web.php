<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Route::view('/', 'welcome');
require __DIR__ . '/auth.php';

Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::view('/shopping', 'shopping')
    ->name('shopping');
Route::view('/blog', 'blog')
    ->name('blog');
Route::view('/about', 'about')
    ->name('about');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/{shop:slug}/{product:slug}', [IndexController::class, 'show'])
    ->name('show');
Route::get('/{shop:slug}', [IndexController::class, 'shop'])
    ->name('shop');
