<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UrlController;
use App\Http\Controllers\API\UrlAPIController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('unauth', function () {
    return view('unauth');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Redirect to URL dashboard after login
    Route::get('/home', [UrlController::class, 'index'])->name('home'); // Redirect to URL index after login

    // Display the list of URLs
    Route::get('/url', [UrlController::class, 'index'])->name('url.index');

    // Show the form to create a new URL
    Route::get('/url/add', [UrlController::class, 'create'])->name('url.create');

    // Handle the submission of the form (POST request)
    Route::post('/url', [UrlController::class, 'store'])->name('url.store');

    // Get the edit page
    Route::get('/url/{url}/edit', [UrlController::class, 'edit'])->name('url.edit');
    Route::put('/url/{url}', [UrlController::class, 'update'])->name('url.update');

    // Show the details of a specific URL (change route name to 'url.show')
    Route::get('/url/{url}/show', [UrlController::class, 'show'])->name('url.show');

    // Delete the URL
    Route::delete('/url/{url}', [UrlController::class, 'destroy'])->name('url.destroy');

    // Route for redirection
    //Route::get('/{shortened_url}', [UrlController::class, 'redirect'])->name('url.redirect');
    // Route for shortened URL redirection
    Route::get('/redirect/{shortened_url}', [UrlController::class, 'redirect'])->name('url.redirect');

    // Route To API token
    Route::get('/apitoken', [App\Http\Controllers\Web\TokenController::class, 'show'])->name('showApiToken');


});