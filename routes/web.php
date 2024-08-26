<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('page.contact');
});

Route::get('/transaction', function () {
    return view('page.transaction');
});

Route::get('/login', function () {
    return view('page.login');
});

Route::get('/signup', function () {
    return view('page.signup');
});

Route::get('/forgot', function () {
    return view('page.forgot');
});
