<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return "This is a test route from user.php!";
});

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'home']);
Route::get('/about-us', [\App\Http\Controllers\HomePageController::class, 'about'])->name('about-us');
Route::get('/tutorials', [\App\Http\Controllers\HomePageController::class, 'tutorials'])->name('tutorials');
Route::get('/contact-us', [\App\Http\Controllers\HomePageController::class, 'contact'])->name('contact-us');


