<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;



// routes/web.php
Route::get('/', [HomeController::class, 'index']);
Route::resource('tours', 'TourController');
Route::resource('bookings', 'BookingController');
Route::post('contact', 'ContactController@store');
Route::get('locations/{location}', 'LocationController@show');
Route::post('payment', [PaymentController::class, 'create'])->name('payment.create');
Route::get('payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');





Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Caché limpiada";
});
