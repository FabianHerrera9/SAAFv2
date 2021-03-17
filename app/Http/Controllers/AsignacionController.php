<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignacion;
use App\Models\Usuarios;
use App\Models\Docente;
use App\Models\Activo;
use App\Models\Ambiente;

class AsignacionController extends Controller
{
    public function listar(){

        $asignacion=Asignacion::all();
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=Usuarios::all();
        return view('modules.asignaciones.index',compact('asignacion','ambiente','activo','docente','usuario'));

    }

    public function crear(){
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=Usuarios::all();
        return view('modules.asignaciones.crear',compact('ambiente','activo','docente','usuario'));
    }
    public function guardar(Request $request){
        $validar=$request->validate([
           'Fecha'=>'required',
           'Observaciones'=>'required|max:100',
           'Estado'=>'required',
           'IdActivo'=>'required',
           'IdDocente'=>'required',
           'IdAmbiente'=>'required',
           'IdUsuario'=>'required',
        ]);
        $asignaciones=Asignacion::create($request->all());
        return redirect()->route('asignaciones.index');
    }

}
