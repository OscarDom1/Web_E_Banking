<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('features.index');
});

Route::get('/about', function () {
    return view('features.about');
});


Route::get('/contact', function () {
    return view('features.contact');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');




//show registration form
Route::get('/register', [UserController::class, 'register']);

//register new user
Route::post('/users', [UserController::class, 'store']);

//notification route

Route::get('info-notification', [InfoController::class, 'store']);


//show login form
Route::get('/login', [UserController::class, 'login']);

//login user
Route::post('/user/login_user', [UserController::class, 'login_user']);

//logout user
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/gettingstart', function () {
    return view('features.gettingstart');
});

Route::get('/help', function () {
    return view('features.help');
});

Route::get('/terms', function () {
    return view('features.terms');
});

Route::get('/faq', function () {
    return view('features.faq');
});

Route::get('/privacy', function () {
    return view('features.privacy');
});

Route::get('/team', function () {
    return view('features.team');
});

//customers profile
Route::get('/features/profile', [UserController::class, 'profile'])->name('features.profile');

//update customers profile
Route::get('/features/edit-profile', [UserController::class, 'editProfile'])->name('features.edit-profile');

// Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

// routes/web.php
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Auth\User;

// Display the forgot password form
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Send password reset link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the form to reset password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Update the password
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');



//userdashboard
Route::get('/dashboard/home', [UserController::class, 'indexx'])->name('dashboard.home');

//admin dashboard
Route::get('/admin/home', [UserController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//admin notification route
Route::get('/admin/notifications', function () {
    return view('admin.notifications');
});

//customer notification route
Route::get('/customer/notification', function () {
    return view('customer.notification');
});

//manage customers route in the dashboard
Route::get('/admin/customers', [AdminController::class, 'manageCustomers'])->name('admin.customers');

//customers transaction history route
Route::get('/transactions', [CustomerController::class, 'transactions'])->name('customer.transactions');


//show funding page
Route::get('admin/fund-account/{user}', [AdminController::class, 'showFundAccountPage'])->name('admin.fund-account');


//funding customers account
Route::post('/admin/fund-account/{user}', [AdminController::class, 'fundAccount'])->name('admin.fund-account');

//view trasnfer funds page
Route::get('/customer/transfer', function () {
    return view('customer.transfer');
});

//customer to customer transfers
Route::post('/transfer-funds', [CustomerController::class, 'transferFunds'])->name('transfer-funds');

//show message to all customer  form
Route::get('/admin/message', [AdminController::class, 'showMessageForm'])->name('admin.message.form');

//send message to all customers 
Route::post('/admin/message', [AdminController::class, 'sendMessageToCustomers'])->name('admin.message.send');

//view message form page
// Route::get('/admin/message-form/{user}',[AdminMessageController::class, 'showMessageForm'])->name('admin.message-form');

//to send messages to a particular customer
Route::get('/admin/send-message/{user}', [AdminMessageController::class, 'create'])->name('admin.send-message');

//to send messages to a particular customer
Route::post('/admin/send-message', [AdminMessageController::class, 'store'])->name('admin.send-message.store');

//customer transfer pin form
Route::get('/customer/set-pin', [UserController::class, 'setPinForm'])->name('customer.set-pin.form');

//customer transfer pin
Route::post('/customer/set-pin', [UserController::class, 'setPin'])->name('customer.set-pin');

//change of pin page
Route::get('/customer/change-pin', [CustomerController::class, 'showChangePinForm'])->name('customer.change-pin-form');

//change pin
Route::post('/customer/change-pin', [CustomerController::class, 'changePin'])->name('customer.change-pin');

//account statement route
Route::get('/dashboard/account-statement', [CustomerController::class, 'accountStatement'])->name('account.statement');

//show the payment form
Route::get('/dashboard/payment-form', [PaymentController::class, 'showForm'])->name('payment.form');

//bill payment route
Route::post('/bill-payment', [PaymentController::class, 'payBill'])->name('bill.payment');

 // Route to show the fund transfer form
 Route::get('/dashboard/fund-transfer', [CustomerController::class, 'showForm'])->name('dashboard.fund-transfer');
    
 // Route to process the fund transfer
 Route::post('/fund-transfer', [CustomerController::class, 'transferFunds'])->name('fund-transfer.transfer');

//route to card-request notice
Route::get('/dashboard/card-request', function () {
    return view('dashboard.card-request');
});

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');


// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//mobile generation otp
Route::get('/otp/login', [AuthOtpController::class, 'login'])->name('otp.login');

Route::post('/otp/generate', [AuthOtpController::class, 'generate'])->name('otp.generate');

Route::get('/otp/verification/{user_id}', [AuthOtpController::class, 'verification'])->name('otp.verification');

Route::post('/otp/login', [AuthOtpController::class, 'loginWithOtp'])->name('otp.getLogin');

//pagination and filter route
Route::get('/transaction', [TransactionController::class, 'index'])->name('dashboard.home');

Route::get('/email/message', [UserController::class, 'show1'])->name('verification.notice');

Route::get('/email/message/{id}/{hash}', [UserController::class, 'verify'])->middleware(['auth'])->name('verification.verify');

// emailjs contact form
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//show airtime purchase form
Route::get('/customer/airtime-purchase', function () {
    return view('customer.airtime-purchase');
});

//airtime purchase route
Route::post('/airtime-purchase', [TransactionController::class, 'purchase'])->name('airtime.purchase');
