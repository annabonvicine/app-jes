<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'index'])->name('user.index');
// Route::get('/create-user', [userController::class, 'create'])->name('user.create');
// Route::post('/store-user', [userController::class, 'store'])->name('user.store');
Route::get('/entrar', [userController::class, 'entrar'])->name('user.entrar');

