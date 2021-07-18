<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/api-paket-ea', 'Api\PaketEAController');
Route::resource('/api-testimoni', 'Api\TestimoniController');
Route::resource('/api-identity-telp', 'Api\IdenTelpController');
Route::resource('/api-our-service', 'Api\OurServiceController');
Route::resource('/api-our-service-detail', 'Api\OurServiceDetailController');
Route::resource('/api-gallery', 'Api\GalleryController');
