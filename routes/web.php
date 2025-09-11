<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/register', [WebController::class, 'register'])->name('register');


// Handle login form submit
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/register', [WebController::class, 'registerSubmit'])->name('register.submit');
Route::get('/website-check-referral', [WebController::class, 'checkReferral'])->name('website.check.referral');

