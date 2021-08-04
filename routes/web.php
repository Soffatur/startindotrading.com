<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', 'LandingController@index')->name('landing');
    Route::get('/login', 'Auth\AuthController@login')->name('login');
    Route::post('/doLogin', 'Auth\AuthController@doLogin')->name('doLogin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/website-identity', 'WebsiteIdentityController');
    Route::resource('/telp-identity', 'indentityTelpController');
    // Route::resource('/link-referal', 'LinkReferalController');
    Route::resource('/about', 'AboutController');
    Route::resource('/link-master-ct', 'LinkMasterCTController');
    Route::resource('/link-ea', 'LinkEAController');
    Route::resource('/paket-ea', 'PaketEAController');
    Route::resource('/testimoni', 'TestimoniController');

    Route::resource('/gallery', 'GalleryController');
    Route::resource('/our-service', 'OurServiceController');

    Route::get('/logout', 'Auth\AuthController@doLogout')->name('logout');
});
