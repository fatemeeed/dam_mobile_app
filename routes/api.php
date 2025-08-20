<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;



Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    // Route::post('/posts', [PostController::class, 'store']);
    // Route::put('/profile', [UserController::class, 'update']);
    // و ... بقیه روت‌هایی که فقط باید کاربر لاگین‌کرده ببینه
});
