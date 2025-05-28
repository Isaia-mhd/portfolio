<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name("home");
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name("email.send");

