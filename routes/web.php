<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function(){
    Route::prefix('zones')->group(function(){
        Route::get('', [ZoneController::class, 'index'])->name('zones');
        Route::prefix('{zone}')->group(function(){
            Route::get('', [ZoneController::class, 'show'])->name('zones.show');
            Route::get('schools', [ZoneController::class, 'schools'])->name('zones.schools');
            Route::get('lgas', [ZoneController::class, 'lgas'])->name('zones.lgas');
        });
    });

    Route::prefix('schools')->group(function(){
        Route::get('', [SchoolController::class, 'index'])->name('schools');
    });

    Route::prefix('students')->group(function(){
        Route::get('', [StudentController::class, 'index'])->name('students');
        Route::get('new', [StudentController::class, 'create'])->name('students.create');
        Route::prefix('{student}')->group(function(){
            Route::get('delete', [StudentController::class, 'destroy'])->name('students.destroy');
        });
    });

    Route::prefix('admins')->group(function(){
        Route::get('', [AdminController::class, 'index'])->name('admins');

        Route::prefix('{user}')->group(function(){
            Route::get('delete', [AdminController::class, 'destroy'])->name('admins.destroy');
        });
    }); 
});

Route::get('logout', LogoutController::class)->name('logout');

require __DIR__.'/auth.php';
