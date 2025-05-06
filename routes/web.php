<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/YukLogin', [PageController::class, 'YukLogin'])->name('YukLogin');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
