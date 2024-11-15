<?php

<<<<<<< HEAD
use App\Http\Controllers\User\UserController;
=======
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
<<<<<<< HEAD
});
Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');
Route::get('/register', [UserController::class, 'formRegister'])->name('ereporthub.formRegister');
=======
});
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
