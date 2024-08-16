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
