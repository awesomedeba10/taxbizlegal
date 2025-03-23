<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaintenanceController;

Route::get('/', [PageController::class, 'index'])->name('front.home');
Route::get('about-us', [PageController::class, 'about'])->name('front.about');
Route::get('contact-us', [PageController::class, 'contact'])->name('front.contact');

Route::group(['prefix' => 'meta'], function(){
    Route::get('privacy-policy', [PageController::class, 'privacy'])->name('front.privacy');
    Route::get('terms-and-conditions', [PageController::class, 'terms'])->name('front.terms');
});

Route::group(['prefix' => 'services', 'as' => 'front.services.'], function(){
    Route::get('income-tax-file', [ServiceController::class, 'itr'])->name('income-tax-file');
    Route::get('company-registration', [ServiceController::class, 'pvt'])->name('company-registration');
});

Route::get('coming-soon', [MaintenanceController::class, 'up'])->name('maintenance');
Route::post('coming-soon', [MaintenanceController::class, 'access'])->name('maintenance.access');




