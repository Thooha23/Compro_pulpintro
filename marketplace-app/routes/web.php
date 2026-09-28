<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/our-service-impact', [PageController::class, 'service'])->name('service');
Route::get('/our-partnership', [PageController::class, 'partnership'])->name('partnership');
Route::get('/join', [PageController::class, 'join'])->name('join');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/fundraising', [PageController::class, 'fundraising'])->name('fundraising');
Route::get('/fundraising/{id}', [PageController::class, 'fundraisingDetail'])->name('fundraising.detail');