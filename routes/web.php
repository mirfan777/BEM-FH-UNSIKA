<?php

use Illuminate\Support\Facades\Route;
use App\Settings\SiteProfile;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ProfileController;

Route::get('/', LandingController::class . '@index');
Route::post('form/store', LandingController::class . '@store')->name('submit.form');
Route::get('/kegiatan', KegiatanController::class . '@index');
Route::get('/kegiatan/{slug}', KegiatanController::class . '@show')->name('blog.show');
Route::get('/struktur/{slug}', [StructureController::class, 'show'])->name('struktur.show');
Route::get('/profile',[ProfileController::class, 'showVisiMisi'])->name('profile');
Route::get('/logo',[ProfileController::class, 'showLogo'])->name('logo');