<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\BookmarkController;

// Authentication Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('posts', PostController::class)->except(['create', 'edit']);
    Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
    Route::post('/posts/{post}/like', [LikeController::class, 'toggleLike']);
    Route::post('/posts/{post}/bookmark', [BookmarkController::class, 'store']);
});


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);