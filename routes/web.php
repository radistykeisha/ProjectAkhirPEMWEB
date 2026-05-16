<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;

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

// Route admin kategori
Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
Route::post('/admin/kategori', [KategoriController::class, 'store'])->name('admin.kategori.store');
Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');

// Route katalog produk
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [ProductController::class, 'byKategori'])->name('katalog.kategori');

// Route promo
Route::get('/promos', [PromoController::class, 'index']);
Route::get('/promos/create', [PromoController::class, 'create']);
Route::post('/promos', [PromoController::class, 'store']);