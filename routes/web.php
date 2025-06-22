<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;

// Main website routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/film', [PageController::class, 'film'])->name('film');
Route::get('/photo', [PageController::class, 'photo'])->name('photo');
Route::get('/crew', [PageController::class, 'crew'])->name('crew');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact form handling
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

// Admin CMS Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api-docs', function () {
        return view('admin.api-docs');
    })->name('api-docs');
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('crew', App\Http\Controllers\Admin\CrewController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
});

// API Routes for Headless CMS
Route::prefix('api/v1')->name('api.')->group(function () {
    // Projects API
    Route::get('projects', [App\Http\Controllers\API\ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/featured', [App\Http\Controllers\API\ProjectController::class, 'featured'])->name('projects.featured');
    Route::get('projects/stats', [App\Http\Controllers\API\ProjectController::class, 'stats'])->name('projects.stats');
    Route::get('projects/type/{type}', [App\Http\Controllers\API\ProjectController::class, 'byType'])->name('projects.byType');
    Route::get('projects/{slug}', [App\Http\Controllers\API\ProjectController::class, 'show'])->name('projects.show');
});
