<?php

use Illuminate\Support\Facades\Route;
use App\Settings\SiteProfile;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;



Route::get('/', [LandingController::class, 'index'])->name('landing.page');
Route::post('/submit-form', [LandingController::class, 'store'])->name('submit.form');
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('kegiatan.show');

