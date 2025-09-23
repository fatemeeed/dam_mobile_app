<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Auth\LoginController;


Route::prefix('admin')->namespace('Admin')->group(function () {

    Route::middleware('guest')->group(function () {


        Route::get('/', [LoginController::class, 'loginForm'])->name('admin.login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::middleware(['auth'])->group(function () {

        Route::get('/Dashbord', [AdminHomeController::class, 'index'])->name('admin.home');
        




        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});
