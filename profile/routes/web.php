<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

Route::get('/', [ProfileController::class, 'index']);

Route::get('/profiles', [ProfileController::class, 'index']);
Route::resource('students', StudentController::class);
