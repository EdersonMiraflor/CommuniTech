<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 



Auth::routes();

Route::get('/home', function () {
    return view('page.home');
});



Route::get('/privacy-policy', function () {
    return view('page.privacy-policy');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home/user-profile', function () {
    return view('page.user-profile');
})->middleware('auth');



//Storing Account Data from Contact
//any input in the page Contact will be operated by the controller and will use the function called store
Route::post('/contact', [ContactController::class, 'store'])->middleware('auth');

Route::get('/contact', function () {
    return view('page.contact');
})->middleware('auth');

//Update inputs in forgot page
Route::post('/forgot', [ContactController::class, 'update'])->middleware('auth');

Route::get('/home/transaction', function () {
    return view('page.transaction');
})->middleware('auth');

Route::get('/forgot', function () {
    return view('page.forgot');

})->middleware('auth');

//DISPLAY HOME PAGE
Route::get('/home', function () {
    return view('page.home');
})->middleware('auth');


// Display services Page
Route::get('/home/services', function () {
    return view('page.services');
})->middleware('auth');



//DISPLAY ABOUT PAGE
Route::get('/about', function () {
    return view('page.about');
})->middleware('auth');

//DISPLAY USER MANUAL PAGE

Route::get('/usermanual', function () {
    return view('page.usermanual');
})->middleware('auth');

//DISPLAY CONTACT PAGE
Route::get('/home/contact', function () {
    return view('page.contact');
})->middleware('auth');



//Acts as Sessions
Auth::routes([
    'verify' => true
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

use App\Http\Controllers\BirthController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\DeathController;

Route::get('/birth/registration', [BirthController::class, 'registration'])->name('birth.registration');
Route::get('/birth/certificate', [BirthController::class, 'certificate'])->name('birth.certificate');
Route::get('/birth/receipt', [BirthController::class, 'receipt'])->name('birth.receipt');

Route::get('/marriage/registration', [MarriageController::class, 'registration'])->name('marriage.registration');
Route::get('/marriage/certificate', [MarriageController::class, 'certificate'])->name('marriage.certificate');
Route::get('/marriage/receipt', [MarriageController::class, 'receipt'])->name('marriage.receipt');

Route::get('/death/registration', [DeathController::class, 'registration'])->name('death.registration');
Route::get('/death/certificate', [DeathController::class, 'certificate'])->name('death.certificate');
Route::get('/death/receipt', [DeathController::class, 'receipt'])->name('death.receipt');
