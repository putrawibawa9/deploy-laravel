<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/index');
});

// Route::post('/register', [AuthController::class, 'register']);

Route::resource('/blog', BlogController::class);