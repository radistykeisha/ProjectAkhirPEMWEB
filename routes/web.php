<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreProfileController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Auth (Login & Register)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route untuk Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Route untuk Dashboard (perlu login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Route untuk kelola profil toko (admin only)
    Route::get('/store-profile/edit', [StoreProfileController::class, 'edit'])->name('store-profile.edit');
    Route::post('/store-profile/update', [StoreProfileController::class, 'update'])->name('store-profile.update');
});

// Route untuk melihat profil toko (publik, tidak perlu login)
Route::get('/store-profile', [StoreProfileController::class, 'show'])->name('store-profile.show');