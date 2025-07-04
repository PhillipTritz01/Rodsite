<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\AuthController;

// Main website routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
// Redirect old hardcoded routes to dynamic service pages
Route::get('/services/film-and-video-production', function () {
    return redirect()->route('services.show', 'video-production');
})->name('services.film-video');

Route::get('/services/photography', function () {
    return redirect()->route('services.show', 'professional-photography');
})->name('services.photography');
Route::get('/services/graphic-design', [PageController::class, 'graphicDesign'])->name('services.graphic-design');
Route::get('/services/web-development', [PageController::class, 'webDevelopment'])->name('services.web-development');
Route::get('/services/podcast-production', [PageController::class, 'podcastProduction'])->name('services.podcast');
Route::get('/services/something-else', [PageController::class, 'somethingElse'])->name('services.something-else');

// Dynamic service pages
Route::get('/services/{slug}', [PageController::class, 'showService'])->name('services.show');

// Redirect old filmography and photography routes to portfolio
Route::get('/film', function () {
    return redirect()->route('portfolio');
})->name('film');

Route::get('/crew', [PageController::class, 'crew'])->name('crew');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/gallery/air-show', [PageController::class, 'airShowGallery'])->name('gallery.air-show');
Route::get('/project/{slug}', [PageController::class, 'showProject'])->name('project.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact form handling
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

// Fallback login route (redirects to admin login)
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Password reset routes (without admin prefix for Laravel's system)
Route::get('/admin/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/admin/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// Protected Admin CMS Routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api-docs', function () {
        return view('admin.api-docs');
    })->name('api-docs');
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('crew', App\Http\Controllers\Admin\CrewController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('services.sections', App\Http\Controllers\Admin\ServiceSectionController::class)->except(['show']);

    
    // Home Page Management
    Route::get('homepage', [App\Http\Controllers\Admin\HomePageController::class, 'index'])->name('homepage.index');
    Route::get('homepage/edit', [App\Http\Controllers\Admin\HomePageController::class, 'edit'])->name('homepage.edit');
    Route::put('homepage', [App\Http\Controllers\Admin\HomePageController::class, 'update'])->name('homepage.update');
    Route::delete('homepage/file', [App\Http\Controllers\Admin\HomePageController::class, 'deleteFile'])->name('homepage.deleteFile');
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
