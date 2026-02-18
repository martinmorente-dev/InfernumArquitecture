<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {

    // UserController
    Route::get('/user', [UserController::class, 'getUserAuthenticated'])->middleware('auth:sanctum');
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);

    // GameController
    Route::get('/game/{id}', [GameController::class, 'getGame']);

});
