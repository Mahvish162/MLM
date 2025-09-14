<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanPurchaseController;
// Routes that require authentication

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/plans', [UserController::class, 'plans'])->name('plans');
    Route::get('/withdraw', [UserController::class, 'withdraw'])->name('withdraw');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/check-referral', [UserController::class, 'checkReferral'])->name('check.referral');
    Route::get('/direct-referral', [UserController::class, 'referralHistory'])->name('direct-referral');
    Route::get('/daily-staking-bonus', [UserController::class, 'daily_staking_bonus'])->name('daily-staking-bonus');
    Route::get('/level-bonus', [UserController::class, 'daily_team_staking_bonus'])->name('level-bonus');
// Route::post('/plan-purchase', [PlanPurchaseController::class, 'store'])->name('plan.purchase.store');



// Route::post('/plans/activate', [PlanPurchaseController::class, 'activate'])
//     ->name('plans.activate');

// Route::post('/plan-purchase/{id}/activate', [PlanPurchaseController::class, 'activate'])
    //  ->name('plan.activate');


});


///
