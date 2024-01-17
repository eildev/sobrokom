<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\SubscribeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishListController;
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

Route::controller(SubscribeController::class)->group(function () {
    Route::post('/subscribe/store', 'store')->name('subscribe.store');
    Route::get('/subscribe/view', 'view')->name('subscribe.view');
    // Route::get('/subscribe/edit/{id}', 'edit')->name('subscribe.edit');
    // Route::post('/subscribe/update/{id}', 'update')->name('subscribe.update');
    Route::get('/subscribe/delete/{id}', 'destroy')->name('subscribe.delete');
});

Route::middleware('auth','role:user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user/dashboard', 'userDashboard')->name('user.dashboard');
    });


    // Wishlist related route 
    Route::controller(WishListController::class)->group(function () {
        Route::post('/wishlist/add', 'wishlistAdd')->name('wishlist.add');
    });
});