<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('buku/tambah', [BukuController::class, 'create'])->name('buku.tambah');
Route::post('buku/store', [BukuController::class, 'store'])->name('buku.simpan');