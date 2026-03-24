<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return "Selamat Datang";
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });

    Route::get('/users', function () {
        return "Admin Users";
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'show']);