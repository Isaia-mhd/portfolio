<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name("home");

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('admin.dashboard');
    Route::put('/update', [UserController::class, 'update'])->name('admin.update');

    Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
    Route::put('/languages/{language}', [LanguageController::class, 'update'])->name('languages.update');
    Route::delete('/languages/{language}', [LanguageController::class, 'destroy'])->name('languages.destroy');

    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name("email.send");

