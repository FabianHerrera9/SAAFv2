<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('modules.docentes.listar', compact('docentes'));
    }

    public function crear()
    {
        return view('modules.docentes.crear');
    }

    public function guardar(Request $request)
    {
        $validar=$request->validate([
            'Identificacion'=>'required|max:15',
            'NomDocente'=>'required|max:30',
            'Telefono'=>'required|max:15',
            'Email'=>'required|max:30',
            'Tipoid'=>'required',
            'IdEspecialidad'=>'required|max:30',
        ]);
        $docente = Docente::create($request->all());
        return redirect()->route('docentes.index')->with([
            'message' => 'Docente Creado Satisfactoriamenbte',
            'type' => 'success'
        ]);
    }

    public function editar($id)
    {
        $docentes = Docente::find($id);
        return view('modules.docentes.editar', compact('docentes'));
    }

    public function actualizar(Request $request, $id)
    {
        $validar=$request->validate([
            'Identificacion'=>'required|max:15',
            'NomDocente'=>'required|max:30',
            'Telefono'=>'required|max:15',
            'Email'=>'required|max:30',
            'Tipoid'=>'required',
            'IdEspecialidad'=>'required|max:30',
        ]);
        $docente = Docente::find($id)->update($request->all());
        return redirect()->route('docentes.index')->with([
            'message' => 'Docente Editado Satisfactoriamenbte',
            'type' => 'warning'
        ]);;
    }

    public function desactivar($id)
    {
        $docente = Docente::find($id)->delete();
        return redirect()->route('modules.docentes.index');
    }
}
