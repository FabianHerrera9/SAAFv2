<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;
use App\Http\Controllers\autn\logincontroller;
use App\Http\Controllers\ProveedorController;
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
Route::get('proveedores',[ProveedorController::class,'actualizar'])->name('proveedores.actualizar');

