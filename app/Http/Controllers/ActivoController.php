<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Proveedor;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    public function index()
    {
        $activo = Activo::all();
        return view('modules.activos.listar', compact('activo'));
    }

    public function crear()
    {
        $activo = Activo::all();
        $usuario = Usuarios::all()->where('estado', '=', 'Activo');
        $prov = Proveedor::all();
        return view('modules.activos.crear', compact('activo', 'usuario', 'prov'));

    }
    public function guardar(Request $request){
        $activo=Activo::create($request->all());
        return redirect()->route('activos.index');
    }
    public function editar($id){
        $activo=Activo::all();
        return view('modules.activos.editar',compact('activo'));
    }
}
