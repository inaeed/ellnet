<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

// Default welcome
Route::get('/', function () {
    return view('welcome');
});

// Route ke controller Barang
Route::get('/listbarang', [BarangController::class, 'tampilkan']);

// Route ke halaman utama (langsung ke view)
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/product', 'product');
Route::view('/contact', 'contact');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/dashboard', 'dashboard');
