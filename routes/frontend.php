<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\SubscribeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishListController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\BillingController;
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

// Genarel Pages routes
Route::get('/about-us', function () {
    return view('frontend/pages/about-us');
})->name('aboutus');
Route::get('/terms-and-condition', function () {
    return view('frontend/pages/termsandcondition');
})->name('termsandcondition');

Route::controller(SubscribeController::class)->group(function () {
    Route::post('/subscribe/store', 'store')->name('subscribe.store');
    Route::get('/subscribe/view', 'view')->name('subscribe.view');
    // Route::get('/subscribe/edit/{id}', 'edit')->name('subscribe.edit');
    // Route::post('/subscribe/update/{id}', 'update')->name('subscribe.update');
    Route::get('/subscribe/delete/{id}', 'destroy')->name('subscribe.delete');
});

Route::middleware('auth', 'role:user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user/dashboard', 'userDashboard')->name('user.dashboard');
    });


    // Wishlist related route
    Route::controller(WishListController::class)->group(function () {
        Route::post('/wishlist/add', 'wishlistAdd')->name('wishlist.add');
        Route::get('/wishlist/delete/{id}', 'wishlistDelete')->name('wishlist.delete');
    });


    // Profile related route
    Route::controller(ProfileController::class)->group(function () {
        Route::post('/user/profile/update', 'UpdateProfile')->name('user.profile.update');
    });


    // Billing related route
    Route::controller(BillingController::class)->group(function () {
        Route::post('/billing/insert', 'insert')->name('billing.insert');
    });
});
