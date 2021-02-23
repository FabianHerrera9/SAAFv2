<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docentes::all();
        return view('modules.docentes.listar', compact('docentes'));
    }

    public function crear()
    {
        return view('modules.docentes.crear');
    }

    public function guardar(Request $request)
    {
        $docente = Docentes::create($request->all());
        return redirect()->route('modules.docentes.index');
    }
    public function show($id){
        $docente=Docentes::find($id);
        return view('modules.docentes.show',compact('docente'));
    }
    public function  desactivar ($id){
        $docente=Docentes::find($id)->delete();
        return redirect()->route('modules.docentes.index');
    }
    public function edit($id){
        $docente=Docentes::find($id);
        return view('modules.docentes.edit',compact('docente'));
    }
    public function update (Request $request,$id){
        $docente=formacion::find($id)->update($request->all());
        return redirect()->route('modules.docentes.show',$id);
    }
    public function store(Request $request){
        $docente=Docentes::create($request->all());
        return redirect()->route('modules.docentes.index');

    }
}
