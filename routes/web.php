<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;
use App\Http\Controllers\autn\logincontroller;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\DocenteController;
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

//Usuarios
Route::get('usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('usuarios/crear',[UsuariosController::class,'crear'])->name('usuarios.crear');
Route::post('usuarios',[UsuariosController::class,'guardar'])->name('usuarios.guardar');
Route::get('usuarios/editar/{id}',[UsuariosController::class,'editar'])->name('usuarios.editar');
Route::put('usuarios/{id}',[UsuariosController::class,'actualizar'])->name('usuarios.actualizar');

//Proveedores
Route::get('proveedores',[ProveedorController::class,'listar'])->name('proveedores.index');
Route::get('proveedores/crear',[ProveedorController::class,'crear'])->name('proveedores.crear');
Route::post('proveedores',[ProveedorController::class,'guardar'])->name('proveedores.guardar');
Route::get('proveedores/editar/{id}',[ProveedorController::class,'editar'])->name('proveedores.editar');
Route::put('proveedores/{id}',[ProveedorController::class,'actualizar'])->name('proveedores.actualizar');

//Docentes
Route::get('docentes',[DocenteController::class,'index'])->name('docentes.index');
Route::get('docentes/crear',[DocenteController::class,'crear'])->name('docentes.crear');
Route::post('docentes',[DocenteController::class,'store'])->name('docentes.store');
Route::get('docentes/{id}',[DocenteController::class,'show'])->name('docentes.show');
Route::delete('docentes/{id}',[DocenteController::class,'desactivar'])->name('docentes.desactivar');
Route::get('docentes/edit/{id}',[DocenteController::class,'edit'])->name('docentes.edit');
Route::put('docentes/{id}',[DocenteController::class,'update'])->name('docentes.updadate');
Route::post('docentes',[DocenteController::class,'guardar'])->name('docentes.guardar');

//Activos
Route::get('activos',[ActivoController::class,'index'])->name('activos.index');
Route::get('activos/crear',[ActivoController::class,'crear'])->name('activos.crear');
Route::get('activos',[ActivoController::class,'guardar'])->name('activos.guardar');
Route::get('activos/editar',[ActivoController::class,'editar'])->name('activos.editar');

