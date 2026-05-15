<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route admin kategori
Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
Route::post('/admin/kategori', [KategoriController::class, 'store'])->name('admin.kategori.store');
Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');

// Route katalog produk
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [ProductController::class, 'byKategori'])->name('katalog.kategori');