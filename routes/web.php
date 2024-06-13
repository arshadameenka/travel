<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home');
Route::get('/user', function () {
    return view('home.home');
})->middleware(['auth','userdash'])->name('user.dashboard');


Route::middleware(['auth','verified','admindash'])->prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
        Route::prefix('/profile')->name('profile.')->controller(ProfileController::class)->group(function(){
            Route::get('/', 'edit')->name('edit');
            Route::patch('/', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });
        Route::prefix('packages')->controller(PackageController::class)->name('packages.')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create','create')->name('create');
            Route::get('/store','store')->name('store');
        });
});

require __DIR__.'/auth.php';
