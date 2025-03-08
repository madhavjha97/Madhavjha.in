<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomePageController::class, 'home'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/tutorials', [\App\Http\Controllers\HomePageController::class, 'tutorials'])->name('tutorials');
Route::get('/contact-us', [\App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');


