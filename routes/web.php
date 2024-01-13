<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\EmployeeLoginController;
use App\Http\Controllers\Frontend\EmployeeHomepageController;


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
Route::group(['prefix' => 'civiconnect', 'middleware' => 'gaurd'], function () {
    // form regsitartion and logimpn
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/post', [LoginController::class, 'post']);
    Route::post('/check', [LoginController::class, 'Check']);
    Route::post('/check', [LoginController::class, 'Check']);

    // Homepage
    Route::get('/homepage', [HomepageController::class, 'show']);
    Route::get('/complain', [HomepageController::class, 'complain']);
    Route::post('/complain', [HomepageController::class, 'complainstore']);

    //Homepage Employee

    Route::get('/ehomepage', [EmployeeHomepageController::class, 'eshow']);
    Route::get('/avote/{id}', [EmployeeHomepageController::class, 'addvote']);
});
