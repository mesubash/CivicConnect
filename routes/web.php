<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ComplainController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegistrationContorller;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;

//user 
    Route::get('/', [GuestController::class, 'index'])->name('guest.homepage');
    Route::get('/complain', [ComplainController::class, 'index'])->name('user.complain');
    Route::get("/contactus", [ContactUsController::class, 'index'])->name('user.contactus');
    Route::get("/aboutus", [AboutUsController::class, 'index'])->name("user.aboutus");
    // Route::get("/login", [LogInController::class, 'user'])->name('user.login');
    // // Route::get("/register", [RegistrationContorller::class, 'user'])->name('user.register');
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

