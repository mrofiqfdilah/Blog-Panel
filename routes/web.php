<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'auth_view']);
Route::get('signin', [AuthController::class, 'auth_view'])->name('signin');
Route::post('signin_store', [AuthController::class, 'auth_store'])->name('signin_store');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'main'])->name('admin.dashboard');
});
