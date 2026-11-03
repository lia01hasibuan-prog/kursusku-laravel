<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;

// 1. Route Beranda (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Route Halaman Pendaftaran (Form)
Route::get('/pendaftaran', [EnrollmentController::class, 'create'])->name('enrollments.create');

// 3. Route Proses Submit Pendaftaran
Route::post('/pendaftaran', [EnrollmentController::class, 'store'])->name('enrollments.store');

// 4. Route Tambahan: API untuk cek sisa kursi (AJAX)
Route::get('/api/cek-kursi', [EnrollmentController::class, 'cekKursi'])->name('api.cek.kursi');