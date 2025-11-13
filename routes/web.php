<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

// Route default /a -> welcome.blade.php
Route::get('/a', function () {
    return view('welcome');
});

// Route untuk halaman CV
Route::get('/', [CvController::class, 'index'])->name('cv.index');
Route::get('/pendidikan', [CvController::class, 'pendidikan'])->name('cv.pendidikan');
Route::get('/pengalaman', [CvController::class, 'pengalaman'])->name('cv.pengalaman');
Route::get('/keahlian', [CvController::class, 'keahlian'])->name('cv.keahlian');
