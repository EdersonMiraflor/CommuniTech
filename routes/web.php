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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentRecordController;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Controllers\AnnouncementController;

Auth::routes();
Auth::routes(['verify' => true]);

//scan route
Route::get('/scan', function () {
    return view('scan');
});

// Home Routes
Route::get('/home/user-profile/report', [CertificateController::class, 'showReport'])->middleware('auth');
Route::get('/home/privacy-policy', fn() => view('page.privacy-policy'));
Route::get('/home/usermanual', fn() => view('page.usermanual'));
Route::get('/home/usermanagement', fn() => view('page.usermanagement'))->middleware('auth');
Route::get('/home/user-profile', [AdminController::class, 'UserProfile'])->name('user.profile')->middleware('auth');
Route::patch('/change-credential', [AdminController::class, 'changeCredential'])->name('change.credential');
Route::patch('/change-rider-credential', [AdminController::class, 'changeRiderCredential'])->name('change.ridercredential');
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
Route::get('/rider_application', fn() => view('rider_application'))->middleware('auth');
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

    Route::get('/birthform', fn() => view('page.form102'))->middleware('auth');
    Route::get('/marriageform', fn() => view('page.marriageform'))->middleware('auth');
    Route::get('/deathform', fn() => view('page.deathform'))->middleware('auth');
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
Route::get('/verify-account', [OtpHomeController::class, 'verifyaccount'])->name('verifyaccount')->middleware('auth');
Route::post('/verifyotp', [OtpHomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/otpform', [OtpController::class, 'showRequests'])->middleware('auth');
Route::post('/otpform', [OtpController::class, 'create'])->name('otpform');

// Birth Registration Routes
Route::resource('birth-registration', BirthRegistrationController::class);

// Home Routes (after authentication and email verification)

// Display the payment form (GET request)
Route::get('/payment', [PaymentController::class, 'index'])->middleware('auth');
// Store the payment record (POST request)
Route::post('/payment', [PaymentRecordController::class, 'userrecord'])->name('store.record');

// Display the payment form (GET request)
Route::get('/payment', [PaymentController::class, 'index'])->middleware('auth');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');

// Generate Certificate PDF
Route::get('/generatebirth', [GeneratePDFController::class, 'generatebirth']);
Route::get('/generatemarriage', [GeneratePDFController::class, 'generatemarriage']);
Route::get('/generatedeath', [GeneratePDFController::class, 'generatedeath']);
Route::get('/generatedeath/send', [GeneratePDFController::class, 'generatesend']);

Route::get('/view-deathonly-cert', function () {
    return view('page.forms.onlydeathcert');
});

Route::get('/view-birthhonly-cert', function () {
    return view('page.forms.onlybirthcert');
});

Route::get('/view-marriageonly-cert', function () {
    return view('page.forms.onlymarriagecert');
});

Route::get('/home', [AnnouncementController::class, 'displays'])->name('announcement.displays');
Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::delete('/announcement/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');
Route::put('/announcement/update', [AnnouncementController::class, 'update'])->name('announcement.update');
// routes/web.php
use App\Http\Controllers\EmailFileSendingController;

Route::post('/send-file-email', [EmailFileSendingController::class, 'sendFileEmail'])->name('send.file.email');

use App\Http\Controllers\RiderController;

Route::get('/rider/application', [RiderController::class, 'create'])->name('riders.create');
Route::post('/rider/application', [RiderController::class, 'store'])->name('riders.store');
Route::get('/rider/application/confirmation', [RiderController::class, 'confirmation'])->name('riders.confirmation');
