<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/{slug}', function ($slug) {
    $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    return view('blog.show', compact('blog'));
});
