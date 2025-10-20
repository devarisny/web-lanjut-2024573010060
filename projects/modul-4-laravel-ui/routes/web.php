<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UIController;
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

    Route::get('/', [UIController::class, 'home'])->name('home');
    Route::get('/about', [UIController::class, 'about'])->name('about');
    Route::get('/contact', [UIController::class, 'contact'])->name('contact');
    Route::get('/profile', [UIController::class, 'profile'])->name('profile');
    Route::get('/switch-theme/{theme}', [UIController::class, 'switchTheme'])->name('switch-theme');

