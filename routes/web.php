<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/valter', [userController::class, 'valter'])->name('user.valter');
Route::get('/create-user', [userController::class, 'create'])->name('user.create');
Route::post('/store-user', [userController::class, 'store'])->name('user.store');
Route::get('/entrar', [userController::class, 'entrar'])->name('user.entrar');
Route::get('/', [userController::class, 'index'])->name('user.index');
Route::get('/show-user/{user}', [userController::class, 'show']) -> name('user.show');
Route::get('/edit-user/{user}', [userController::class, 'edit']) -> name('user.edit');
Route::put('/update-user/{user}', [userController::class, 'update']) -> name('user.update');
Route::get('/inicializador', [userController::class, 'inicializador'])->name('user.inicializador');
