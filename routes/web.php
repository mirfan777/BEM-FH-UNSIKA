<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/kegiatan', function () {
    return view('kegiatan_more');
});

Route::get('/blog/{slug}', function ($slug) {
    $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    return view('blog.show', compact('blog'));
});
