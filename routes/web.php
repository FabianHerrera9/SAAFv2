<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;
use App\Http\Controllers\autn\logincontroller;
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
Route::redirect('/','login');
Route::get('login',[logincontroller::class,'from_login'])->name('autn.from_login');
Route::post('autn',[logincontroller::class,'autn'])->name('autn.autn');

Route::get('usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('usuarios_crear',[UsuariosController::class,'crear'])->name('usuarios.crear');
Route::post('usuarios',[UsuariosController::class,'guardar'])->name('usuarios.guardar');
Route::get('usuarios/crear2',[UsuariosController::class,'mostrar'])->name('usuarios.mostrar');


