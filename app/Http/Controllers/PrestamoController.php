<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\User;
use App\Models\Docente;
use App\Models\Activo;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=User::all();
        return view('modules.prestamos.index', compact('prestamos','activo','docente','usuario','ambiente'));
    }

    public function crear()
    {
        $activos = Activo::all();
        $usuarios = User::all();
        $docentes = Docente::all();
        $ambiente=Ambiente::all();
        return view('modules.prestamos.crear', compact('activos', 'docentes', 'usuarios','ambiente'));
    }

    public function guardar(Request $request){
        $validar= $request->validate([
            'FechaPrestamo'=>'required',
            'FechaDevolucion'=>'required',
            'Observaciones'=>'required|max:100',
            'Estado'=>'required',
            'IdActivo'=>'required',
            'IdDocente'=>'required',
            'IdAmbiente'=>'required',
            'IdUsuario'=>'required',
        ]);
        $prestamos=Prestamo::create($request->all());
        return redirect()->route('prestamos.index');
    }
}
