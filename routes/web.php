<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('Home.home');
//});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin
Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    //Basic Settings
    Route::get('/settings', [\App\Http\Controllers\BasicSettingController::class, 'index'])->name('admin.settings');
    Route::get('/settings-edit', [\App\Http\Controllers\BasicSettingController::class, 'edit'])->name('admin.settings.edit');
    Route::post('/settings-edit', [\App\Http\Controllers\BasicSettingController::class, 'update'])->name('admin.settings.update');

    //User List
    Route::get('/user-list', [UserController::class, 'index'])->name('users.list');

    // Route end
});


require __DIR__.'/auth.php';

