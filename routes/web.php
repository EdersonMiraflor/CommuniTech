<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController; 

Route::get('/', function () {
    return view('index');
});

//Storing Account Data from Signup
//any input in the page signup will be operated by the controller and will use the function called store
Route::post('/signup', [AccountController::class, 'store']);

Route::get('/signup', function () {
    return view('page.signup');
});

// Handling Login
Route::post('/login', [AccountController::class, 'login']);

// Display Login Page
Route::get('/login', function () {
    return view('page.login');
});

Route::get('/home', function () {
    return view('page.home');
});

Route::get('/home/contact', function () {
    return view('page.contact');
});

Route::get('/home/transaction', function () {
    return view('page.transaction');
});

Route::get('/login', function () {
    return view('page.login');
});

Route::get('/forgot', function () {
    return view('page.forgot');
});
