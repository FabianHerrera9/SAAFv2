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
        $docente = Docente::create($request->all());
        return redirect()->route('docentes.index')->with([
            'message' => 'Docente Creado Satisfactoriamenbte',
            'type' => 'success'
        ]);
    }

    public function editar($id)
    {
        $docente = Docente::find($id);
        return view('modules.docentes.edit', compact('docente'));
    }

    public function actualizar(Request $request, $id)
    {
        $docente = Docente::find($id)->update($request->all());
        return redirect()->route('modules.docentes.show', $id);
    }

    public function desactivar($id)
    {
        $docente = Docente::find($id)->delete();
        return redirect()->route('modules.docentes.index');
    }
}
