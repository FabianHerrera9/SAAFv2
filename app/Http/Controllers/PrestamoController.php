<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Usuarios;
use App\Models\Docente;
use App\Models\Activo;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=Usuarios::all();
        return view('modules.prestamos.index', compact('prestamos','activo','docente','usuario'));
    }

    public function crear()
    {
        $activos = Activo::all();
        $usuarios = Usuarios::all();
        $docentes = Docente::all();
        return view('modules.prestamos.crear', compact('activos', 'docentes', 'usuarios'));
    }

    public function guardar(Request $request){
        $validar= $request->validate([
            'FechaPrestamo'=>'required',
            'FechaDevolucion'=>'required',
            'Observaciones'=>'required|max:100',
            'Estado'=>'required',
            'IdActivo'=>'required',
            'IdDocente'=>'required',
            'IdUsuario'=>'required',
        ]);
        $prestamos=Prestamo::create($request->all());
        return redirect()->route('prestamos.index');
    }

    public function editar($id){

        $prestamo=Prestamo::all();
        $activos = Activo::all();
        $usuarios = Usuarios::all();
        $docenetes = Docente::all();
        return view('modules.prestamos.editar',compact('prestamo','activos','usuarios','docenetes'));
    }

    public function actualizar(Request $request,$id){
        $validar= $request->validate([
            'FechaPrestamo'=>'required',
            'FechaDevolucion'=>'required',
            'Observaciones'=>'required|max:100',
            'Estado'=>'required',
            'IdActivo'=>'required',
            'IdDocente'=>'required',
            'IdUsuario'=>'required',
        ]);
        $prestamos=Prestamo::find($id)->update($request->all());
        return redirect()->route('prestamos.index');
    }
}
