<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\ContentSecurityPolicy;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::middleware([ContentSecurityPolicy::class])->group(function () {
    Route::redirect('/', '/home');

// Registration routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

// Login routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

// Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home route
    Route::get('/home', [HomeController::class, 'index']);

// Categories
    Route::get('/category1', [CategoryController::class, 'showCategory1'])->name('dashboard');
    Route::get('/category2', [CategoryController::class, 'showCategory2'])->name('vehicles');
    Route::get('/category3', [CategoryController::class, 'showCategory3'])->name('contact-support');
});
