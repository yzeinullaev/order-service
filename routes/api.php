<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('login', [AuthController::class, 'login']);
        Route::get('logout', [AuthController::class, 'logout']);

        // Получения данных о заказах пользователя
        Route::get('order', [AuthController::class, 'logout']);
    });
});

