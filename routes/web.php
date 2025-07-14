<?php

use App\Models\Halaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home', 'dashboard');

Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->middleware('guest');
Route::get('/auth/callback', [AuthController::class, 'callback'])->middleware('guest');
Route::get('/auth/logout', [AuthController::class, 'logout']);





Route::prefix('dashboard')->group(
    function () {
        Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
        Route::resource('halaman', HalamanController::class)->middleware('auth');
        Route::resource('experience', ExperienceController::class)->middleware('auth');
    }
);
