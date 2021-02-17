<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UsuariosController::class]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('usuarios_crear',[UsuariosController::class,'crear'])->name('usuarios.crear');
Route::post('usuarios',[UsuariosController::class,'guardar'])->name('usuarios.guardar');
Route::get('usuarioseditar-{id}',[UsuariosController::class,'editar'])->name('usuarios.editar');
Route::put('usuarios-{id}',[UsuariosController::class,'actualizar'])->name('usuarios.actualizar');

