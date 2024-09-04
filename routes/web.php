<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController; 

Auth::routes();

Route::get('/', function () {
    return view('index');
});

//Storing Account Data from Signup
//any input in the page signup will be operated by the controller and will use the function called store
Route::post('/signup', [AccountController::class, 'store'])->middleware('auth');

Route::get('/signup', function () {
    return view('page.signup');
})->middleware('auth');

// Handling Login
Route::post('/login', [AccountController::class, 'login'])->middleware('auth');

// Display Login Page
Route::get('/login', function () {
    return view('page.login');
});

//Update inputs in forgot page
Route::post('/forgot', [AccountController::class, 'update'])->middleware('auth');

Route::get('/home/contact', function () {
    return view('page.contact');
})->middleware('auth');

Route::get('/home/transaction', function () {
    return view('page.transaction');
})->middleware('auth');

Route::get('/forgot', function () {
    return view('page.forgot');
})->middleware('auth');


//Acts as Sessions
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
