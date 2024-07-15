<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\PasswordResetController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

 Route::get('/welcome', function () {
     return view('welcome');
 })->name('welcome');


 Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dmsp', function () {
    return view('dmsp');
});


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::get('registration', [LoginController::class, 'registration'])->name('register');
Route::post('post-registration', [LoginController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [LoginController::class, 'dashboard']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('welcome', [AdminController::class, 'welcome']);
// Route::get('blog', [AdminController::class, 'blog']);
// Route::get('/blog/{mabv}', [AdminController::class, 'showDetails'])->name('blog.details');

Route::get('/blog', [AdminController::class, 'showBlog'])->name('blog.index');

Route::get('/test-baiviets', function () {
    $baiviets = \App\Models\Baiviet::all();
    dd($baiviets);
});

Route::get('blog/{mabv}', [AdminController::class, 'showDetails'])->name('blog.details');


// routes/web.php




Route::get('/menu/{CategoryID}', [MenuController::class, 'show'])->name('menu.show');

Route::get('/product/{ProductID}', [MenuController::class, 'showProduct'])->name('product.show');


Route::get('password/reset', [PasswordResetController::class,'showResetForm'])->name('password.request');
Route::post('password/email', [PasswordResetController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class,'showResetPasswordForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class,'resetPassword'])->name('password.update');



// Route::get('/email/verify', function () {
//     return view('admin.users.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
