<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home', 'dashboard');

Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->middleware('guest');
Route::get('/auth/callback', [AuthController::class, 'callback'])->middleware('guest');
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
