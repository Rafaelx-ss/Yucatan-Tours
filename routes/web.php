<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', 'HomeController@index');
Route::resource('tours', 'TourController');
Route::resource('bookings', 'BookingController');
Route::post('contact', 'ContactController@store');
Route::get('locations/{location}', 'LocationController@show');

