<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserHomepageController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomepageController;


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
    Route::get('/login', [UserLoginController::class, 'login']);
    Route::get('/register', [UserLoginController::class, 'register']);
    Route::post('/post', [UserLoginController::class, 'post']);
    Route::post('/check', [UserLoginController::class, 'Check']);


    Route::get('/homepage', [UserHomepageController::class, 'show']);
    Route::get('/complain', [UserHomepageController::class, 'complain']);
    Route::post('/complain', [UserHomepageController::class, 'complainstore']);


    Route::get('/ehomepage', [AdminHomepageController::class, 'eshow']);
    Route::get('/avote/{id}', [AdminHomepageController::class, 'addvote']);
});
