<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 



Auth::routes();

Route::get('/', function () {
    return view('index');
});

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

// Display services Page
Route::get('/home/services', function () {
    return view('page.services');
})->middleware('auth');

//Acts as Sessions
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Display services Page
Route::get('/home/services', function () {
    return view('page.services');
})->middleware('auth');


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


