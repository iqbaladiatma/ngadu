<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Masyarakat (User)

Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('ereporthub.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('ereporthub.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('ereporthub.register');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('ereporthub.store');
Route::get('/report/{who?}', [UserController::class, 'report'])->name('ereporthub.report');

Route::get('/logout', [UserController::class, 'logout'])->name('ereporthub.logout');
