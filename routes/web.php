<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// --- Products Routes (LENGKAP) ---
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Rute Edit & Hapus yang Anda tambahkan sebelumnya
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// --- Dashboard ---
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// --- Orders, Customers, Categories, Payments ---
Route::get('/orders', function () { return view('orders'); })->name('orders.index');
Route::get('/customers', function () { return view('customers'); })->name('customers.index');
Route::get('/categories', function () { return view('categories'); })->name('categories.index');
Route::get('/payments', function () { return view('payments'); })->name('payments.index');

// --- Auth ---
Route::get('/logout', function () {
    dd('Tombol Logout Berhasil Diklik!'); 
})->name('logout');