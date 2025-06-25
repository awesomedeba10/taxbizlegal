<?php

use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\CustomViewController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiriesController;
use App\Http\Controllers\Admin\ServiceLeadsController;
use App\Http\Middleware\DecodeAdminQueryString;
use App\Http\Middleware\PreventBackHistory;

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
    Route::post('/orders/gstin/capture', [PaymentController::class, 'gstin'])->name('gstin.capture');
});

Route::group(['as' => 'admin.', 'prefix' => config('app.admin_url_prefix')], function () {
    Route::get('login', [AdminLoginController::class, 'show'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth:admin', PreventBackHistory::class, DecodeAdminQueryString::class])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/apply-filter-params', [DashboardController::class, 'filter'])->name('apply.filter');
        Route::get('/charts/fetch-revenue', [DashboardController::class, 'revenue_chart'])->name('chart.revenue');
        Route::get('/charts/fetch-clients', [DashboardController::class, 'clients_chart'])->name('chart.clients');
        Route::get('/charts/fetch-leads', [DashboardController::class, 'leads_chart'])->name('chart.leads');
        Route::get('/charts/fetch-conversion', [DashboardController::class, 'conversion_chart'])->name('chart.conversion');
        Route::get('/charts/fetch-leads-status', [DashboardController::class, 'leads_status_chart']);
        Route::get('/charts/fetch-leads-by-service', [DashboardController::class, 'leads_by_services']);

        Route::post('custom-view/save', [CustomViewController::class , 'saveView'])->name('custom-view.save');

        Route::get('inbound-service-leads', [ServiceLeadsController::class, 'index'])->name('service-leads.index');
        Route::get('inbound-service-leads/paid', [ServiceLeadsController::class, 'paid_index'])->name('service-leads.paid.index');
        Route::get('inbound-service-leads/export', [ServiceLeadsController::class, 'export'])->name('service-leads.export');

        Route::get('incoming-contact-request', [EnquiriesController::class, 'index'])->name('enquiry-leads.index');

        Route::get('manage-users', [AdminUserController::class, 'index'])->name('users.index');
        Route::post('manage-users/create', [AdminUserController::class, 'create'])->name('users.create');
    });
});

Route::get('coming-soon', [MaintenanceController::class, 'up'])->name('maintenance');
Route::post('coming-soon', [MaintenanceController::class, 'access'])->name('maintenance.access');
