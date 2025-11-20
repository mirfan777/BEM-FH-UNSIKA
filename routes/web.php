<?php

use Illuminate\Support\Facades\Route;
use App\Settings\SiteProfile;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StructureController;

Route::get('/', LandingController::class . '@index');
Route::post('form/store', LandingController::class . '@store')->name('submit.form');
Route::get('/kegiatan', KegiatanController::class . '@index');
Route::get('/kegiatan/{slug}', KegiatanController::class . '@show')->name('blog.show');
Route::get('/struktur/{slug}', [StructureController::class, 'show'])->name('struktur.show');

