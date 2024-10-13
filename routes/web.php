<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/', [DashboardController::class, 'index'])
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
            Route::get('delete', [ZoneController::class, 'destroy'])->name('zones.destroy');
        });
    });

    Route::prefix('schools')->group(function(){
        Route::get('', [SchoolController::class, 'index'])->name('schools');
    });

    Route::prefix('schools')->group(function(){
        Route::get('', [SchoolController::class, 'index'])->name('schools');
    });

    Route::prefix('classes')->group(function(){
        Route::get('', [ClassesController::class, 'index'])->name('classes');
        Route::prefix('{class}')->group(function(){
            Route::get('', [ClassesController::class, 'show'])->name('classes.show');
            Route::get('students', [ClassesController::class, 'students'])->name('classes.students');
            Route::get('subjects', [ClassesController::class, 'subjects'])->name('classes.subjects');
            Route::get('delete', [ClassesController::class, 'destroy'])->name('classes.destroy');
        });
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

    Route::prefix('departments')->group(function(){
        Route::get('', [DepartmentController::class, 'index'])->name('departments');
        Route::prefix('{department}')->group(function(){
            Route::get('delete', [DepartmentController::class, 'destroy'])->name('departments.destroy');
        });
    });
    
    Route::prefix('subjects')->group(function(){
        Route::get('', [SubjectController::class, 'index'])->name('subjects');
        Route::prefix('{subject}')->group(function(){
            Route::get('delete', [SubjectController::class, 'destroy'])->name('subjects.destroy');
        });
    });
});

Route::get('logout', LogoutController::class)->name('logout');

require __DIR__.'/auth.php';
