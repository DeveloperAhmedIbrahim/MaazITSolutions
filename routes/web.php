<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, "index"]);
Route::get('home', [HomeController::class, "home"])->name('home');
Route::get('about', [HomeController::class, "about"])->name('about');
Route::get('service/{slug?}', [HomeController::class, "service"])->name('service');
Route::match(['GET', 'POST'], 'contact', [HomeController::class, "contact"])->name('contact');
