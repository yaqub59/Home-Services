<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceProvider;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\RequestsController;
Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home');
});
Route::middleware(['auth', 'user-access:service'])->group(function () {
    Route::get('/service-provider/home', [HomeController::class, 'service'])->name('service.home');
});
//ServiceProvider Routes
Route::middleware(['auth'])->prefix('service-provider')->group(function () {
    Route::get('/profile', [ServiceProvider::class, 'Profile'])->name('service.profile');
    Route::post('/update-cover', [ServiceProvider::class, 'updateCover'])->name('profile.update_cover');
    Route::post('/update-avatar', [ServiceProvider::class, 'updateAvatar'])->name('profile.update_avatar');
    Route::post('/update-profile', [ServiceProvider::class, 'updateProfile'])->name('profile.update-profile');
    Route::get('show/reviews', [ServiceProvider::class, 'ShowReview'])->name('service.show-review');
    // service-provider Requests
    Route::get('/request/show', [RequestsController::class, 'show'])->name('request.show');
    Route::get('/update-status/{id}/{status}', [ServiceProvider::class, 'updateStatus'])
        ->name('service.updateStatus');
    Route::get('/reviews', [ServiceProvider::class, 'showReviews'])->name('service.reviews');
});
//Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.profile');
    Route::post('/update-info', [AdminController::class, 'UpdateInfo'])->name('admin.update-info');
    Route::post('/update-setting', [AdminController::class, 'UpdateSetting'])->name('admin.update-setting');
    Route::get('/setting', [AdminController::class, 'Setting'])->name('admin.setting');

    // Users Routes
    Route::get('/users', [AdminController::class, 'Users'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'UsersCreate'])->name('admin.users-create');
    Route::post('/users/store', [AdminController::class, 'UsersStore'])->name('admin.users-store');
    Route::get('/users/edit/{id}', [AdminController::class, 'UsersEdit'])->name('admin.users.edit');
    Route::post('/users/edit/{id}', [AdminController::class, 'UsersUpdate'])->name('admin.users.update');
    Route::post('/users/delete/{id}', [AdminController::class, 'UsersDelete'])->name('admin.users.destroy');
    Route::post('/users/status/{id}', [AdminController::class, 'status'])->name('admin.users.status');
});
//Institute Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/institute', [InstituteController::class, 'index'])->name('admin.institute');
    Route::get('/institute/create', [InstituteController::class, 'create'])->name('admin.institute-create');
    Route::post('/institute/store', [InstituteController::class, 'store'])->name('admin.institute-store');
    Route::get('/institute/edit/{id}', [InstituteController::class, 'edit'])->name('admin.institute.edit');
    Route::post('/institute/update/{id}', [InstituteController::class, 'update'])->name('admin.institute.update');
    Route::post('/institute/delete/{id}', [InstituteController::class, 'destroy'])->name('admin.institute.destroy');
});
//Employer Sent Requests
Route::middleware(['auth'])->prefix('home')->group(function () {
    Route::get('/request/index', [RequestsController::class, 'index'])->name('request.index');
    Route::get('/search/providers', [RequestsController::class, 'index'])->name('search.providers');
    Route::get('/request/create/{id}', [RequestsController::class, 'create'])->name('request.create');
    Route::post('/request/store', [RequestsController::class, 'store'])->name('request.store');
    Route::get('/request/provider-details/{id}', [RequestsController::class, 'providerDetails'])->name('provider-details');
    Route::get('/profile', [RequestsController::class, 'Profile'])->name('employer.profile');
    Route::post('/profile-update', [RequestsController::class, 'ProfileUpdate'])->name('employer.update');

    // Reviews routes
    Route::get('/request/reviews', [RequestsController::class, 'Reviews'])->name('reviews');
    Route::get('/request/StoreReview/{id}', [RequestsController::class, 'StoreReview'])->name('store-reviews');
    Route::post('/request/submit', [RequestsController::class, 'SubmitReview'])->name('reviews-submit');
});
