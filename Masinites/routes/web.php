<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

// Route to show both login and registration forms
Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');

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
Route::get('/category1', [CategoryController::class, 'showCategory1'])->name('category1');
Route::get('/category2', [CategoryController::class, 'showCategory2'])->name('category2');
Route::get('/category3', [CategoryController::class, 'showCategory3'])->name('category3');
