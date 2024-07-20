<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;






Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);


Route::prefix('auth')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login');
    Route::post('post-login', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [App\Http\Controllers\Auth\LoginController::class, 'registration'])->name('auth.register');
    Route::post('post-registration', [App\Http\Controllers\Auth\LoginController::class, 'postRegistration'])->name('register.post');
    Route::get('home', [App\Http\Controllers\Auth\LoginController::class, 'home']);
    Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');


    Route::get('password/reset', [App\Http\Controllers\Auth\PasswordResetController::class, 'showResetForm'])->name('password.request');
    Route::post('password/email', [App\Http\Controllers\Auth\PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [App\Http\Controllers\Auth\PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('password/reset', [App\Http\Controllers\Auth\PasswordResetController::class, 'resetPassword'])->name('password.update');



});



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });

        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

        #Cart
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
        
    });
});



        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index1'])->name('carts.customer');
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show1'])->name('carts.customer.view');



Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::post('/services/load-product', [App\Http\Controllers\MainController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index1']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show1']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);



Route::get('/blog', [App\Http\Controllers\Admin\BlogController::class, 'showBlog'])->name('blog');

Route::get('/test-baiviets', function () {
    $baiviets = \App\Models\Baiviet::all();
    dd($baiviets);
});

Route::get('blog/{mabv}', [ App\Http\Controllers\Admin\BlogController::class, 'showDetails'])->name('blog.details');

Route::get('/contact', [ App\Http\Controllers\Admin\BlogController::class, 'showContact'])->name('contact');





