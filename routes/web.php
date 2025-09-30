<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/kegiatan', function () {
    return view('kegiatan_more');
});
