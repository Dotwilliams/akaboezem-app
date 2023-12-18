<?php

use App\Models\MemberProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DownloadableController;
use App\Http\Controllers\MemberProfileController;
use App\Http\Controllers\OfflinePaymentController;

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





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// pageController
Route::get('/', [pageController::class, 'index'])->name('index');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/membership', [pageController::class, 'membership'])->name('membership');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::get('/event', [pageController::class, 'event'])->name('event');
Route::get('/gallery', [pageController::class, 'gallery'])->name('gallery');



/* -------------  Admin Route  ---------------- */

Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware(['admin_middleware']);

    Route::post('logout', [AdminController::class, 'destroy'])
                ->name('admin.logout');

    Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware(['admin_middleware']);

    Route::get('/faq',[AdminController::class, 'Faq'])->name('admin.faq')->middleware(['admin_middleware']);

    Route::get('/contact',[AdminController::class, 'Contact'])->name('admin.contact')->middleware(['admin_middleware']);

    Route::get('/notification',[AdminController::class, 'Notification'])->name('admin.notification')->middleware(['admin_middleware']);

    Route::get('/message',[AdminController::class, 'Message'])->name('admin.message')->middleware(['admin_middleware']);

    Route::get('/download',[AdminController::class, 'Download'])->name('admin.download')->middleware(['admin_middleware']);


    Route::get('/view_all_members',[AdminController::class, 'AllMembers'])->name('admin.view_all_member')->middleware(['admin_middleware']);

    Route::get('/view_admin',[AdminController::class, 'ViewAdmin'])->name('admin.view_admin')->middleware(['admin_middleware']);

    Route::get('/update_subscription_package',[AdminController::class, 'UpdateSubscription'])->name('admin.update_subscription_package')->middleware(['admin_middleware']);

    Route::post('/store_new_admin',[AdminController::class, 'StoreAdmin'])->name('admin.store_new_admin')->middleware(['admin_middleware']);

    Route::post('/create_sub_admin',[AdminController::class, 'create_sub_admin'])->name('admin.create_sub_admin')->middleware(['admin_middleware']);

    Route::get('/offline_payment',[AdminController::class, 'offlinePayment'])->name('admin.offline_payment')->middleware(['admin_middleware']);

    Route::post('/verify-payment',[OfflinePaymentController::class, 'verifyPayment'])->name('admin.verify-payment')->middleware(['admin_middleware']);










    // Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');

    // Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');


});

/* ------------- End Admin Route  ---------------- */



/* -------------  Member Route  ---------------- */

Route::prefix('member')->group(function (){


    Route::get('/index_dashboard',[MemberProfileController::class, 'Dashboard'])->name('member.index_dashboard')->middleware(['activesubscription_middleware','verified']);

    Route::get('/resources',[MemberProfileController::class, 'Resources'])->name('member.resources')->middleware('activesubscription_middleware');

    Route::get('/donation',[MemberProfileController::class, 'Donation'])->name('member.donation')->middleware('activesubscription_middleware');

    Route::get('/notification',[MemberProfileController::class, 'Notification'])->name('member.notification')->middleware('activesubscription_middleware');

    Route::get('/sub_reminder',[MemberProfileController::class, 'SubReminder'])->name('member.sub_reminder')->middleware('activesubscription_middleware');

    Route::get('/download_history',[MemberProfileController::class, 'DownloadHistory'])->name('member.download_history')->middleware('activesubscription_middleware');

    Route::post('logout', [MemberProfileController::class, 'destroy'])
                ->name('member.logout');


});

Route::post('/create-downloadable', [DownloadableController::class, 'store']);
Route::get('/download/edit/{id}', [DownloadableController::class, 'edit']);


// Laravel 8 & 9
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

// Laravel 8 & 9
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);



// Laravel 8 & 9 Donation
Route::post('/donate', [DonationController::class, 'redirectToGateway'])->name('donate');

// Laravel 8 & 9
Route::get('/donation/callback', [DonationController::class, 'handleGatewayCallback']);

Route::post('/post_payment_prove',[OfflinePaymentController::class, 'uploadProve']);




Route::post('/update-app',[AppController::class, 'update']);
