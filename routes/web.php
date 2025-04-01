<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

//rota para pagina home
Route::get('/valter', [userController::class, 'valter'])->name('user.valter');

//rota para criar usuario(CREATE)
Route::get('/create-user', [userController::class, 'create'])->name('user.create');
Route::post('/store-user', [userController::class, 'store'])->name('user.store');

//rota projeto jes
Route::get('/entrar', [userController::class, 'entrar'])->name('user.entrar');
Route::get('/', [userController::class, 'index'])->name('user.index');
Route::get('/inicializador', [userController::class, 'inicializador'])->name('user.inicializador');
Route::get('/cronograma', [userController::class, 'cronograma'])->name('user.cronograma');
Route::get('/placar', [userController::class, 'placar'])->name('user.placar');


//rota para visualizar usuario(VIEW)
Route::get('/show-user/{user}', [userController::class, 'show']) -> name('user.show');

//rota para editar usuario
Route::get('/edit-user/{user}', [userController::class, 'edit']) -> name('user.edit');

//rota para atualizar informação do usuario(UPDATE)
Route::put('/update-user/{user}', [userController::class, 'update']) -> name('user.update');

//rota para excluir usuario(DESTROY)
Route::delete('/destroy-user/{user}', [userController::class, 'destroy'])->name('user.destroy');


Route::get('/table-user',[RegisterController::class, 'create'])->name('resgister.index');