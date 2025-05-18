<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PaymentController;
use App\Models\Service;

Route::group(['as' => 'front.'], function () {

    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('about-us', [PageController::class, 'about'])->name('about');
    Route::get('contact-us', [PageController::class, 'contact'])->name('contact');

    Route::post('contact-us/get-leads', [PageController::class, 'contact_leads'])->name('contact.leads');

    Route::group(['prefix' => 'meta'], function () {
        Route::get('privacy-policy', [PageController::class, 'privacy'])->name('privacy');
        Route::get('terms-and-conditions', [PageController::class, 'terms'])->name('terms');
        Route::get('refund-policy', [PageController::class, 'refund'])->name('refund');
    });

    Route::get('/services/{slug}', [ServiceController::class, 'reroute'])->name('services');
    Route::post('/services/get-leads/{part}/{slug}', [ServiceController::class, 'leads'])->name('services.get-leads');

    Route::get('/orders/checkout', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/orders/create', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('/orders/verify', [PaymentController::class, 'verify'])->name('payment.verify');
    Route::get('/orders/success', [PaymentController::class, 'success'])->name('payment.success');
});

Route::get('coming-soon', [MaintenanceController::class, 'up'])->name('maintenance');
Route::post('coming-soon', [MaintenanceController::class, 'access'])->name('maintenance.access');
