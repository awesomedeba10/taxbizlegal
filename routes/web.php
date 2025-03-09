<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;

Route::get('/', [PageController::class, 'index'])->name('front.home');
Route::get('contact-us', [PageController::class, 'contact'])->name('front.contact');

Route::group(['prefix' => 'meta'], function(){
    Route::get('privacy-policy', [PageController::class, 'privacy'])->name('front.privacy');
    Route::get('terms-and-conditions', [PageController::class, 'terms'])->name('front.terms');
});

Route::group(['prefix' => 'services'], function(){
    Route::get('income-tax-file', [ServiceController::class, 'itr'])->name('front.itr');
});




