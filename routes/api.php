<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Model\User;
use App\Http\Controllers\API\UrlAPIController;
use App\Http\Controllers\Auth\LoginController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('url',UrlAPIController::class);
});
/*
Route::middleware('auth:api')->group(function () {
    Route::apiResource('url', UrlAPIController::class);
});*/