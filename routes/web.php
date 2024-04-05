<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ComplainController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserComplainController;

//user 
    Route::get('/', [GuestController::class, 'index'])->name('guest.homepage');
    Route::get('/complain', [ComplainController::class, 'index'])->name('user.complain');
    Route::post('/complain',[ComplainController::class,'store'])->name('user.storecomplain');
    Route::get("/contactus", [ContactUsController::class, 'index'])->name('user.contactus');
    Route::get("/aboutus", [AboutUsController::class, 'index'])->name("user.aboutus");
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[AdminHomeController::class,'index'])->name('admin.homepage');
    Route::get('/user',[UserController::class,'index'])->name('admin.user');
    Route::get('/complain',[UserComplainController::class,'index'])->name('admin.usercomplain');
   
});