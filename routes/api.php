<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\Api\Home\FinancialYearController;
use App\Http\Controllers\API\Home\FlocksController;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/financial-years', [FinancialYearController::class, 'index']);
    Route::post('/financial-years/store', [FinancialYearController::class, 'store']);

    Route::prefix('flocks')->group(function(){

       Route::get('/', [FlocksController::class, 'index']);

    });
});
   
