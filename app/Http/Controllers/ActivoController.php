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
        $prov=Proveedor::all();
        $usuarios=Usuarios::all();
        return view('modules.activos.listar', compact('activo','usuarios','prov'));
    }

    public function crear()
    {
        $activo = Activo::all();
        $usuario = Usuarios::all();//->where('estado', '==', 'Activo');
        $prov = Proveedor::all();
        return view('modules.activos.crear', compact('activo', 'usuario', 'prov'));

    }
    public function guardar(Request $request){

        //validate


        $activo=Activo::create($request->all());
        return redirect()->route('activos.index');
    }
    public function editar($id){
        $activo=Activo::find($id);
        $prov=Proveedor::all();
        $usu=Usuarios::all();
        return view('modules.activos.editar',compact('activo','prov','usu'));
    }
    public function actualizar(Request $request,$id){
        //validate

        $activo=Activo::find($id)->update($request->all());
        return redirect()->route('activos.index');
    }
}
