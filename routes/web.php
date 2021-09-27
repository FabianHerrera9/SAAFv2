 <?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuariosController;
use App\Http\Controllers\autn\logincontroller;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\DescargarPDFController;


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
Route::redirect('/', 'login');
Route::post('/login', [logincontroller::class,'login'])->name('login');
Route::put('/login', [logincontroller::class,'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {



//Usuarios
    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('usuarios/crear', [UsuariosController::class, 'crear'])->name('usuarios.crear');
    Route::post('usuarios', [UsuariosController::class, 'guardar'])->name('usuarios.guardar');
    Route::get('usuarios/editar/{id}', [UsuariosController::class, 'editar'])->name('usuarios.editar');
    Route::put('usuarios/{id}', [UsuariosController::class, 'actualizar'])->name('usuarios.actualizar');
    Route::get('usuarios/show', [UsuariosController::class, 'detalle'])->name('usuarios.mostrar');

//proveedores
    Route::get('proveedores', [ProveedorController::class, 'listar'])->name('proveedores.index');
    Route::get('proveedores/crear', [ProveedorController::class, 'crear'])->name('proveedores.crear');
    Route::post('proveedores', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');
    Route::get('proveedores/editar/{id}', [ProveedorController::class, 'editar'])->name('proveedores.editar');
    Route::put('proveedores/{id}', [ProveedorController::class, 'actualizar'])->name('proveedores.actualizar');

//Docentes
    Route::get('docentes', [DocenteController::class, 'index'])->name('docentes.index');
    Route::get('docentes/crear', [DocenteController::class, 'crear'])->name('docentes.crear');
    Route::post('docentes', [DocenteController::class, 'guardar'])->name('docentes.guardar');
    Route::get('docentes/editar/{id}', [DocenteController::class, 'editar'])->name('docentes.editar');
    Route::put('docentes/{id}', [DocenteController::class, 'actualizar'])->name('docentes.actualizar');

//Ambientes
    Route::get('ambientes',[AmbienteController::class,'listar'])->name('ambientes.index');
    Route::get('ambientes/crear',[AmbienteController::class,'crear'])->name('ambientes.crear');
    Route::post('ambientes',[AmbienteController::class,'guardar'])->name('ambientes.guardar');
    Route::get('ambientes/editar/{id}',[AmbienteController::class,'editar'])->name('ambientes.editar');
    Route::put('ambientes/{id}',[AmbienteController::class,'actualizar'])->name('ambientes.actualizar');


//activos
    Route::get('activos', [ActivoController::class, 'index'])->name('activos.index');
    Route::get('activos/crear', [ActivoController::class, 'crear'])->name('activos.crear');
    Route::get('activos/{id}', [ActivoController::class, 'hojaDeVida'])->name('activos.hv');
    Route::post('activos', [ActivoController::class, 'guardar'])->name('activos.guardar');
    Route::get('activos/editar/{id}', [ActivoController::class, 'editar'])->name('activos.editar');
    Route::put('Activos/{id}',[ActivoController::class,'actualizar'])->name('activos.actualizar');


//Prestamos
    Route::get('prestamos',[PrestamoController::class,'index'])->name('prestamos.index');
    Route::get('prestamos/crear',[PrestamoController::class,'crear'])->name('prestamos.crear');
    Route::post('prestamos',[PrestamoController::class,'guardar'])->name('prestamos.guardar');
    Route::get('prestamos/editar/{id}',[PrestamoController::class,'editar'])->name('prestamos.editar');

//Mantenimiento
    Route::get('mantenimientos',[MantenimientoController::class,'index'])->name('Mttogarant.index');
    Route::get('mantenimientos/crear',[MantenimientoController::class,'crear'])->name('Mttogarant.crear');
    Route::post('mantenimientos',[MantenimientoController::class,'guardar'])->name('Mttogarant.guardar');
    Route::get('mantenimientos/{id}',[MantenimientoController::class,'mostrar'])->name('Mttogarant.mostrar');


//REPORTES
    Route::get('reportes',[DescargarPDFController::class,'index'])->name('reportes.index');
    Route::get('reportes/proveedores', [DescargarPDFController::class, 'Proveedores'])->name('reportes.proveedores');
    Route::get('reportes/docentes', [DescargarPDFController::class, 'Docentes'])->name('reporte.docentes');
    Route::get('reportes/ambientes', [DescargarPDFController::class, 'Ambientes'])->name('reportes.ambientes');
    Route::get('reportes/activos', [DescargarPDFController::class, 'Activos'])->name('reportes.activos');
    Route::get('reportes/prestamos', [DescargarPDFController::class, 'Prestamos'])->name('reportes.prestamos');
    Route::get('reportes/mantenimiento', [DescargarPDFController::class, 'Mantenimiento'])->name('reportes.mantenimiento');
});



