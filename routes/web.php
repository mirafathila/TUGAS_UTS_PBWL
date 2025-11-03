<?php

use Illuminate\Support\Facades\Route;

// Halaman utama Laravel (default)
Route::get('/', function () {
    return view('welcome');
});

// Halaman home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Halaman halaman
Route::get('/halaman', function () {
    return view('halaman');
})->name('halaman');

// Tambah produk
Route::get('/produk', function () {
    return view('produk');
})->name('produk');
