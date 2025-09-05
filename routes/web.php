<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
