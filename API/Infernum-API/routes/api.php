<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;

    Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {

        Route::get('/user', [UserController::class, 'getUserAuthenticated'])->middleware('auth:sanctum');

        Route::post('/login', [UserController::class, 'login']);
        Route::post('/register', [UserController::class, 'register']);
});
