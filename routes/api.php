<?php

use App\Http\Controllers\Api\CityApiController;
use App\Http\Controllers\Api\StateApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('city')->group(function () {
    Route::get('/', [CityApiController::class, 'getCities']);
});

Route::prefix('state')->group(function () {
    Route::get('/', [StateApiController::class, 'getStates']);
});