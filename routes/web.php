<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\MemberProfile;

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
    return view('welcome');
});

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
Route::get('/index', [pageController::class, 'index'])->name('index');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/membership', [pageController::class, 'membership'])->name('membership');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::get('/event', [pageController::class, 'event'])->name('event');
Route::get('/gallery', [pageController::class, 'gallery'])->name('gallery');



/* -------------  Admin Route  ---------------- */

Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin_middleware');

    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin_middleware');

    Route::get('/faq',[AdminController::class, 'Faq'])->name('admin.faq')->middleware('admin_middleware');

    Route::get('/contact',[AdminController::class, 'Contact'])->name('admin.contact')->middleware('admin_middleware');

    Route::get('/notification',[AdminController::class, 'Notification'])->name('admin.notification')->middleware('admin_middleware');

    Route::get('/message',[AdminController::class, 'Message'])->name('admin.message')->middleware('admin_middleware');

    Route::get('/download',[AdminController::class, 'Download'])->name('admin.download')->middleware('admin_middleware');






    // Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');

    // Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');


});

/* ------------- End Admin Route  ---------------- */



/* -------------  Member Route  ---------------- */

Route::prefix('member')->group(function (){

    Route::get('/{id}',[MemberProfileController::class, 'Member'])->name('member.{id}');




});
