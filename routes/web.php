<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\brandController;

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
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //All Routes for Category Start
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category','index')->name('category');
        Route::post('/category/store','store')->name('category.store');
        Route::get('/category/view','view')->name('category.view');
        Route::get('/category/edit/{id}','edit')->name('category.edit');
        Route::post('/category/update/{id}','update')->name('category.update');
        Route::get('/category/delete/{id}','delete')->name('category.delete');
    });
    //All Routes for Category End

    //All Routes for Subcategory Start
    Route::controller(SubcategoryController::class)->group(function(){
        Route::get('/subcategory','index')->name('subcategory');
        Route::post('/subcategory/store','store')->name('subcategory.store');
        Route::get('/subcategory/view','view')->name('subcategory.view');
        Route::get('/subcategory/edit/{id}','edit')->name('subcategory.edit');
        Route::post('/subcategory/update/{id}','update')->name('subcategory.update');
        Route::get('/subcategory/delete/{id}','delete')->name('subcategory.delete');
    });
    //All Routes for Subcategory End

        //All Routes for brand Start
        Route::controller(brandController::class)->group(function(){
            Route::get('/brand','index')->name('brand');
            Route::post('/brand/store','store')->name('brand.store');
            Route::get('/brand/view','show')->name('brand.view');
            Route::get('/brand/edit/{id}','edit')->name('brand.edit');
            // Route::post('/brand/update/{id}','update')->name('brand.update');
            Route::get('/brand/delete/{id}','destroy')->name('brand.delete');
        });
        //All Routes for brand End
});

require __DIR__.'/auth.php';
