<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\CertificateController;
Auth::routes();

//Route::get('/home/report', [CertificateController::class, 'showIssuedCertificate'])->middleware('auth');
Route::get('/home/report', [CertificateController::class, 'showTransactions']);


Route::get('/home/privacy-policy', function () {
    return view('page.privacy-policy');
});

Route::get('/home/usermanual', function () {
    return view('page.usermanual');
});

Route::get('/home/usermanagement', function () {
    return view('page.usermanagement');
})->middleware('auth');

Route::get('/home/user-profile', function () {
    return view('page.user-profile');
})->middleware('auth');

Route::get('/home/transactionhistory', function () {
    return view('page.transactionhistory');
})->middleware('auth');

Route::get('/home/about', function () {
    return view('page.about');
});

Route::get('/', function () {
    return view('index');
});

//Storing Account Data from Contact
//any input in the page Contact will be operated by the controller and will use the function called store
Route::post('/home/contact', [ContactController::class, 'store'])->middleware('auth');

Route::get('/home/contact', function () {
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

//DISPLAY ABOUT PAGE
# Route::post('/about', [AboutController::class, 'store'])->middleware('auth');

Route::get('/home/about', function () {
    return view('page.about');
})->middleware('auth');


//Acts as Sessions
Auth::routes([
    'verify' => true
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

