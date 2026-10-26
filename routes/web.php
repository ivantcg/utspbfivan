<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MaxtonController;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/shop', [LandingController::class, 'shop'])->name('landing.shop');
Route::get('/shop-detail', [LandingController::class, 'shopDetail'])->name('landing.shop-detail');
Route::get('/cart', [LandingController::class, 'cart'])->name('landing.cart');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('landing.checkout');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

Route::prefix('maxton')->group(function () {
    Route::get('/maxton', [MaxtonController::class, 'index'])->name('maxton.index'); 
    
    Route::get('/calendar', [MaxtonController::class, 'calendar'])->name('maxton.app-fullcalender');
    Route::get('/login', [MaxtonController::class, 'login'])->name('maxton.auth-basic-login');
    Route::get('/modals', [MaxtonController::class, 'modals'])->name('maxton.component-modals');
    Route::get('/form-elements', [MaxtonController::class, 'formElements'])->name('maxton.form-elements');
    Route::get('/datatable', [MaxtonController::class, 'datatable'])->name('maxton.table-datatable');
});