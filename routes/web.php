<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/',[UserController::class,'home'])->name('home');

// Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/store-login',[LoginController::class,'store_login'])->name('store_login');

// Register
Route::get('/signup',[RegisterController::class,'register'])->name('register');
Route::post('/store-signup',[RegisterController::class,'store_register'])->name('store_register');

Route::middleware('auth')->group(function(){
    Route::get('/booking/{id}',[BookingController::class, 'booking'])->name('booking');
});
