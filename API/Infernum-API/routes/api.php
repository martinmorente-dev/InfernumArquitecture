<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {

    // UserController
    Route::get('/user', [UserController::class, 'getUserAuthenticated'])->middleware('auth:sanctum');
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);


    // Games Route
    Route::group(['prefix' => 'games', 'namespace' => 'App\Http\Controllers'], function() {
        Route::get('/details/{id}', [GameController::class, 'details']);
        Route::get('/all/{pagination?}', [GameController::class, 'all']);
        Route::get('/name', [GameController::class, 'searchByName']);
        Route::get('/filter', [GameController::class, 'filterGame']);
    });

});
