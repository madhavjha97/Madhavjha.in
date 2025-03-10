<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomePageController::class, 'home'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/project', [\App\Http\Controllers\HomePageController::class, 'project'])->name('project');
Route::get('/student-zone', [\App\Http\Controllers\HomePageController::class, 'studentzone'])->name('student-zone');
Route::get('/tutorials', [\App\Http\Controllers\HomePageController::class, 'tutorials'])->name('tutorials');
Route::get('/contact-us', [\App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::post('/savecontact', [\App\Http\Controllers\HomePageController::class, 'savecontact'])->name('savecontact');
Route::resource('/connect-with-me', \App\Http\Controllers\ConnectWithMeController::class);


