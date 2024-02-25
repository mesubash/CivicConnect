<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\ComplainController;

Route::group(['prefix' => 'user'], function () {
    Route::get('/home', [HomepageController::class, 'index'])->name('user.homepage');
    Route::get('/complain', [ComplainController::class, 'index'])->name('user.complain');
});
