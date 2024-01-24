<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\SubscribeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishListController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\frontend\BillingInfoController;
use App\Http\Controllers\frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\CartController;

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
Route::get('/contact-us', function () {
    return view('frontend/pages/contact-us');
})->name('contactus');
Route::get('/privacy-policy', function () {
    return view('frontend/pages/privacy-policy');
})->name('privacypolicy');
Route::get('/faqs', function () {
    return view('frontend/pages/faqs');
})->name('faqs');

// product related routes
Route::controller(ProductDetailsController::class)->group(function () {
    Route::get('/product-details/{slug}', 'productDetails')->name('product.details');
    Route::get('/category/{categoryslug}', 'categoryWiseProduct')->name('category.wise.product');
    Route::get('/subcategory/{subcategoryslug}', 'subcategoryWiseProduct')->name('subcategory.wise.product');
    Route::get('/brand/{brandslug}', 'brandWiseProduct')->name('brand.wise.product');
    Route::post('/product', 'SearchbyProduct')->name('search.product');
});

// Cart related routes
Route::controller(CartController::class)->group(function () {
    Route::post('/product/add_to_cart', 'addToCart')->name('product.add_to_cart');
    Route::get('/product/show_cart', 'showCart')->name('product.show_cart');
    Route::get('/product/show_cart_products', 'showCartProducts')->name('product.show_cart_products');
    Route::get('/product/remove_cart_product/{id}', 'removeCartProduct')->name('product.remove_cart');
    Route::get('/cart/remove-cart-product/{id}', 'cartPageRemoveItem')->name('product.cartpage.remove');
    Route::post('/cart/update-cart-product/{id}', 'cartPageUpdateItem')->name('product.cartpage.update');
    Route::get('/checkout', 'checkout')->name('checkout');
});


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
    Route::controller(BillingInfoController::class)->group(function () {
        Route::post('/billing/insert', 'insert')->name('billing.insert');
    });
});
