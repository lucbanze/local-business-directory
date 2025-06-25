<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\AuthController;

Route::get('/ping', function () {
    return response()->json(['message' => 'API is alive']);
});

// Public routes
// Authentication
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Businesses
Route::get('/businesses', [BusinessController::class, 'index']);
Route::get('/businesses/{id}', [BusinessController::class, 'show']);
// Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
// Reviews
Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);


// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('businesses', BusinessController::class)->except(['index']);
    Route::apiResource('categories', CategoryController::class)->except(['index','show']);
    Route::apiResource('reviews', ReviewController::class)->except(['index','show']);
});
