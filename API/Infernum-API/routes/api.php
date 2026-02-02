    <?php

        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;

    Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
});
