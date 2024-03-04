<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\ComplainController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\AboutUsController;

Route::group(['prefix' => 'user'], function () {
    Route::get('/home', [HomepageController::class, 'index'])->name('user.homepage');
    Route::get('/complain', [ComplainController::class, 'index'])->name('user.complain');
    Route::get("/contactus", [ContactUsController::class, 'index'])->name('user.contactus');
    Route::get("/aboutus", [AboutUsController::class, 'index'])->name("user.aboutus");
});
