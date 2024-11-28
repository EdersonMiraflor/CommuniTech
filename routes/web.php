<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController; 
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\CertificateController; 
use App\Http\Controllers\PdfController; 
use App\Http\Controllers\OtpController; 
use App\Http\Controllers\OtpHomeController;
Auth::routes();

//Route::get('/home/report', [CertificateController::class, 'showIssuedCertificate'])->middleware('auth');
Route::get('/home/report', [CertificateController::class, 'showReport'])->middleware('auth'); 

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

Route::get('/home/services/form102', function () {
    return view('page.form102');
})->middleware('auth');

Route::get('/home/services/form102/transactionform', function () {
    return view('page.transactionform');
})->middleware('auth');

Route::get('/home/services/deathform', function () {
    return view('page.deathform');
})->middleware('auth');

Route::get('/home/services/marriageform', function () {
    return view('page.marriageform');
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


                                                //Excusive for TransactionForm Only

/*TRANSACTION HISTORY 2
Explanation:
    -After Directing the user to transactionhistory page, it fetch the program in FormsController then apply 
    the function displaydocument
*/
Route::get('/transactionform', [FormsController::class, 'displaydocument']);
Route::get('/transactionform/creates', [FormsController::class, 'createuserform']);
/*USER FORM ADDRESS 2
Explanation: 
    -After Directing the user to transactionhistory/(user id) page, it fetch the program in FormsController then apply 
    the function showuserform
*/
Route::get('/transactionform/{id}', [FormsController::class, 'showuserform']);

                                            /*PDF Generator*/
Route::get('/generatePDF', [PdfController::class, 'generatePdf']);

                                            /*OTP*/
Route::get('/otphome', [OtpHomeController::class, 'index']);
/*Sending OTP Code with OTP Form 4
Explanation: 
    -When it direct to verify-account page, it will proceed to OtpHomeController which will do the function "verifyaccount".
 */
Route::get('/verify-account', [OtpHomeController::class, 'verifyaccount'])->name('verifyaccount');
/*Sending OTP Code with OTP Form 7
Explanation: 
   -Once directing to verifyotp, it will go to OtpHomeController and do the function "useractivation".
*/
Route::post('/verifyotp', [OtpHomeController::class, 'useractivation'])->name('verifyotp');                                            

/*Sending OTP Code with OTP Form 2
Explanation: 
    -After the user input, it will go to the OtpController and do the function "create" there
    -If "/otpform" is sritten in the url, then it will direct to the otpform page
 */
Route::get('/otpform', function () {
    return view('page.otp.otpform');
})->middleware('auth');

Route::post('/otpform', [OtpController::class, 'create'])->name('otpform');

use App\Http\Controllers\BirthRegistrationController;

Route::resource('birth_registrations', BirthRegistrationController::class);
use App\Http\Controllers\RiderController;

// Routes for rider signup (already working)
Route::get('/rider-signup', [RiderController::class, 'create']);
Route::post('/rider-signup', [RiderController::class, 'store']);

// Resource route for CRUD operations on riders
Route::resource('riders', RiderController::class);

// Add the new routes for the rider home page and delivery history
Route::get('riders/{id}/home', [RiderController::class, 'home'])->name('riders.home');
Route::get('riders/{id}/delivery-history', [RiderController::class, 'deliveryHistory'])->name('riders.delivery-history');
