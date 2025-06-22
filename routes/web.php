<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/film', [PageController::class, 'film'])->name('film');
Route::get('/photo', [PageController::class, 'photo'])->name('photo');
Route::get('/crew', [PageController::class, 'crew'])->name('crew');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store'); 