<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Route::view('/', 'welcome');
Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::get('/{shop:slug}/{product:slug}', [IndexController::class, 'show'])
    ->name('show');
Route::view('/about', 'about')
    ->name('about');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
