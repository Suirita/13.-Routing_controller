<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Protected routes for article creation, editing, and deletion
Route::middleware('auth.middleware')->group(function () {
    Route::resource('articles', ArticleController::class)->only(['create', 'edit', 'store', 'update', 'destroy']);
});

// Public routes for articles
Route::resource('articles', ArticleController::class)->only(['index', 'show']);

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);