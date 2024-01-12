<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\HomepageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'civiconnect'], function () {
    // form regsitartion and login
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/post', [LoginController::class, 'post']);
    Route::post('/check', [LoginController::class, 'Check']);
    Route::post('/check', [LoginController::class, 'Check']);

    // Homepage
    Route::get('/homepage', [HomepageController::class, 'show']);
    Route::get('/complain', [HomepageController::class, 'complain']);
    Route::post('/complain', [HomepageController::class, 'complainstore']);
});
