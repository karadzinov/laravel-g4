<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function() {
    Route::get('/user', [\App\Http\Controllers\Api\UserController::class, 'index']);
    Route::get('/users', [\App\Http\Controllers\Api\UserController::class, 'all']);
    Route::get('/user/{user}/edit', [\App\Http\Controllers\Api\UserController::class, 'edit']);
    Route::put('/user/{user}',  [\App\Http\Controllers\Api\UserController::class, 'update']);
    Route::post('/users', [\App\Http\Controllers\Api\UserController::class, 'store']);
    Route::delete('/users/{user}', [\App\Http\Controllers\Api\UserController::class, 'destroy']);
});

