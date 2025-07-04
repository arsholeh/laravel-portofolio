<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home', 'dashboard');

Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
