<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use  App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/register', [WebController::class, 'register'])->name('register');


// Handle login form submit
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/register', [WebController::class, 'registerSubmit'])->name('register.submit');
Route::get('/website-check-referral', [WebController::class, 'checkReferral'])->name('website.check.referral');

use App\Http\Controllers\PlanPurchaseController;

Route::middleware(['auth'])->group(function () {
    Route::post('/plan/purchase', [PlanPurchaseController::class, 'store'])
        ->name('plan.purchase.store');
});


Route::get('/plans', [PlanPurchaseController::class, 'index'])->name('plans.index');
Route::post('/plan-purchase/activate', [PlanPurchaseController::class, 'activate'])->name('plan.activate');
