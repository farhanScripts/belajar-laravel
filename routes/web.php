<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Farhan Putra', 'title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Headline', 'isi' => 'isi headline', 'title' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
