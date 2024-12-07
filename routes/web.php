<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\OtpHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CertificateRequestController;
use App\Http\Controllers\CertificateDisplayController;
use App\Http\Controllers\RiderController;

Auth::routes();
Auth::routes(['verify' => true]);

// Home Routes
Route::get('/home/user-profile/report', [CertificateController::class, 'showReport'])->middleware('auth');
Route::get('/home/privacy-policy', fn() => view('page.privacy-policy'));
Route::get('/home/usermanual', fn() => view('page.usermanual'));
Route::get('/home/usermanagement', fn() => view('page.usermanagement'))->middleware('auth');
Route::get('/home/user-profile', [AdminController::class, 'UserProfile'])->name('user.profile')->middleware('auth');
Route::patch('/change-credential', [AdminController::class, 'changeCredential'])->name('change.credential');
Route::get('/home/user-personal', [UsersController::class, 'showPersonalInfo'])->name('personal.info')->middleware('auth');
Route::post('/user/update', [AdminController::class, 'dataupdate'])->name('user.update');
Route::get('/home/transactionhistory', fn() => view('page.transactionhistory'))->middleware('auth');
Route::get('/home/about', fn() => view('page.about'))->middleware('auth');
Route::get('/', fn() => view('index'));

// Contact Routes
Route::post('/home/contact', [ContactController::class, 'store'])->middleware('auth');
Route::get('/home/contact', fn() => view('page.contact'))->middleware('auth');
Route::post('/forgot', [ContactController::class, 'update'])->middleware('auth');

// Service Routes
Route::get('/home/services', fn() => view('page.services'))->middleware('auth');
Route::get('/home/adminmanagement', fn() => view('page.adminmanagement'))->middleware('auth');
Route::get('/home/rider_user_com', fn() => view('page.rider_user_com'))->middleware('auth');
Route::get('/home/rider_admin_com', fn() => view('page.rider_admin_com'))->middleware('auth');
Route::get('/home/ridermanagement', fn() => view('page.ridermanagement'))->middleware('auth');
Route::get('/home/userrequest', fn() => view('page.userrequest'))->middleware('auth');

// Form Routes Start
    //Birth Start
    Route::get('/home/services/form102', [CertificateRequestController::class, 'birthcreate']);
    Route::post('/home/services/form102', [CertificateRequestController::class, 'birthstore']);
    //Birth End

    // Marriage Start
    Route::get('/home/services/marriageform', [CertificateRequestController::class, 'marriagecreate'])->middleware('auth');
    Route::post('/home/services/marriageform', [CertificateRequestController::class, 'marriagestore'])->middleware('auth');
    // Marriage End

    // Death Start
    Route::get('/home/services/deathform', [CertificateRequestController::class, 'deathcreate'])->middleware('auth');
    Route::post('/home/services/deathform', [CertificateRequestController::class, 'deathstore'])->middleware('auth');
    // Death End

    // Birth Certificate Start
    Route::get('/home/services/form102/birthform', [CertificateDisplayController::class, 'directbirth'])->middleware('auth');
    Route::post('/home/services/form102/birthform', [CertificateDisplayController::class, 'showbirth'])->middleware('auth');
    // Birth Certificate End

    // Marriage Certificate Start
    Route::get('/home/services/marriageform/marriageformcert', [CertificateDisplayController::class, 'directmarriage'])->middleware('auth');
    Route::post('/home/services/marriageform/marriageformcert', [CertificateDisplayController::class, 'showmarriage'])->middleware('auth');
    // Marriage Certificate End

    // Death Certificate Start
    Route::get('/home/services/deathform/deathformcert', [CertificateDisplayController::class, 'directdeath'])->middleware('auth');
    Route::post('/home/services/deathform/deathformcert', [CertificateDisplayController::class, 'showdeath'])->middleware('auth');
    // Death Certificate End

// Form Routes End

    //NextForm Start
Route::get('/home/services/form102/transactionform', fn() => view('page.transactionform'))->middleware('auth');
Route::get('/home/services/deathform', fn() => view('page.deathform'))->middleware('auth');
Route::get('/home/services/marriageform', fn() => view('page.marriageform'))->middleware('auth');
    //NextForm End  

// Transaction Routes
Route::get('/transactionform', [FormsController::class, 'displaydocument']);
Route::get('/transactionform/creates', [FormsController::class, 'createuserform']);
Route::get('/transactionform/{id}', [FormsController::class, 'showuserform']);

// PDF Generator Route
Route::get('/generatePDF', [PdfController::class, 'generatePdf'])->middleware('auth');

// OTP Routes
Route::get('/otphome', [OtpHomeController::class, 'index']);
Route::get('/verify-account', [OtpHomeController::class, 'verifyaccount'])->name('verifyaccount');
Route::post('/verifyotp', [OtpHomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/otpform', fn() => view('page.otp.otpform'))->middleware('auth');
Route::post('/otpform', [OtpController::class, 'create'])->name('otpform');

// Birth Registration Routes
Route::resource('birth-registration', BirthRegistrationController::class);

// Rider Routes
Route::get('/rider-signup', [RiderController::class, 'create']);
Route::post('/rider-signup', [RiderController::class, 'store']);
Route::resource('riders', RiderController::class);
Route::get('riders/{id}/home', [RiderController::class, 'home'])->name('riders.home');
Route::get('riders/{id}/delivery-history', [RiderController::class, 'deliveryHistory'])->name('riders.delivery-history');

// Home Routes (after authentication and email verification)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');


// Rider Routes (legit)
Route::get('/rider_application', fn() => view('rider_application'))->middleware('auth');
Route::get('/rider_interface', fn() => view('rider_interface'))->middleware('auth');