<?php

use Illuminate\Support\Facades\Route;
use App\Settings\SiteProfile;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;

Route::get('/', LandingController::class . '@index');
Route::get('/kegiatan', KegiatanController::class . '@index');
Route::get('/kegiatan/{slug}', KegiatanController::class . '@show')->name('blog.show');
