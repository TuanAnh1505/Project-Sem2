<?php

use App\Http\Controllers\Admin\Menus\CategoriesController;
use App\Http\Controllers\Admin\Users\HomeController;
use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::get('registration', [LoginController::class, 'registration'])->name('register');
Route::post('post-registration', [LoginController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [LoginController::class, 'dashboard']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
   Route::prefix('/')->group(function(){
   Route::get('Admin',[HomeController::class,'adminpage'])->name('Admin');
    //Menu-Categories
    Route::prefix('category')->group(function(){
        Route::get('add',[CategoriesController::class,'create']);
    });
   });
    
});
