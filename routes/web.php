<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

// Prefix Category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [\App\Http\Controllers\CategoryController::class, 'showFoodBeverage']);
    Route::get('/beauty-health', [\App\Http\Controllers\CategoryController::class, 'showBeautyHealth']);
    Route::get('/home-care', [\App\Http\Controllers\CategoryController::class, 'showHomeCare']);
    Route::get('/baby-kid', [\App\Http\Controllers\CategoryController::class, 'showBabyKid']);
});

// Route Param id and name user
Route::get('/user/{id}/name/{name}', [\App\Http\Controllers\UserProfileController::class, 'show']);

// Route Sales
Route::get('/sales', [\App\Http\Controllers\SalesController::class, 'show']);
