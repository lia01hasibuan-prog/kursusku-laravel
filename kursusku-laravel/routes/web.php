<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;

// 1. Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Courses
Route::resource('courses', CourseController::class);

// 3. API cek kursi (AJAX)
Route::get('/api/cek-kursi', [EnrollmentController::class, 'cekKursi'])->name('api.cek.kursi');

// 4. Enrollment ADMIN
//    -> URL   : /admin/enrollments/create   (sama dgn temanmu)
//    -> NAMA  : enrollments.create / store / index  (cocok dgn controller-mu)
//    PENTING: pakai prefix('admin') TAPI JANGAN pakai ->name('admin.')
Route::prefix('admin')->group(function () {
    Route::resource('enrollments', EnrollmentController::class)
        ->only(['index', 'create', 'store']);
});