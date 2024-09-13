<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

// Route to fetch the authenticated user data with Sanctum's authentication guard.
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Group of API routes that require Sanctum authentication.
// Routes are only accessible if the user is authenticated
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('url',UrlAPIController::class);
});