<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel-welcome', function () {
    return view('welcome');
});

// Web Routing
Route::get('/', [HomeController::class, 'index'])->name('home');
