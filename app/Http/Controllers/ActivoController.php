<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Mantenimiento;
use App\Models\Prestamo;
use App\Models\Proveedor;
use App\Models\user;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ActivoController extends Controller
{
    public function index()
    {
        $activo = Activo::all();
        $prov=Proveedor::all();
        $usuarios=user::all();
        return view('modules.activos.listar', compact('activo','usuarios','prov'));
    }

    public function crear()
    {
        $activo = Activo::all();
        $usuario = user::all();//->where('estado', '==', 'Activo');
        $prov = Proveedor::all();
        return view('modules.activos.crear', compact('activo', 'usuario', 'prov'));

    }
    public function guardar(Request $request){

        $validar=$request->validate([
            'NombreActivo'=>'required|max:15',
            'SN'=>'required|max:20',
            'Marca'=>'required|max:15',
            'Modelo'=>'required|max:15',
            'Descripcion'=>'required|max:100',
            'Garantia'=>'required',
            'TipoActivo'=>'required',
            'IdProveedor'=>'required',
            'IdUsuario'=>'required',
        ]);

        $activo=Activo::create($request->all());
        return redirect()->route('activos.index');
    }
    public function editar($id){
        $activo=Activo::find($id);
        $prov=Proveedor::all();
        $usu=user::all();
        return view('modules.activos.editar',compact('activo','prov','usu'));
    }
    public function actualizar(Request $request,$id){

        $validar=$request->validate([
            'NombreActivo'=>'required|max:50|string',
            'SN'=>'required|max:20',
            'Marca'=>'required|max:15',
            'Modelo'=>'required|max:30',
            'Descripcion'=>'required|max:100',
            'Garantia'=>'required|date|after:today',
            'TipoActivo'=>'required',
            'IdProveedor'=>'required',
            'IdUsuario'=>'required',
        ]);

        $activo=Activo::find($id)->update($request->all());
        return redirect()->route('activos.index');
    }

    public function hojaDeVida($id)
    {
        $activo= Activo::find($id);
        $prov= Proveedor::all();
        $usuario=User::all();
        $mantenimiento= Mantenimiento::where("IdActivo","=",$id)->get();
        $prestamo= Prestamo::where("IdActivo","=",$id)->get();
        return view('modules.activos.hv', compact('activo','prov','usuario', 'mantenimiento','prestamo'));
    }


}
