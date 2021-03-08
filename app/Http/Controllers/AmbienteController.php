<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;

class AmbienteController extends Controller
{
    public function listar(){

        $Ambiente=Ambiente::all();
        return view('modules.ambientes.index',compact('Ambiente'));

    }
    public function crear(){

        return view('modules.ambientes.crear');

    }
    public function guardar (Request $request){

        $ambientes=Ambiente::create($request->all());
        return redirect()->route('ambientes.index');

    }
    public function editar($id){

        $Ambiente=Ambiente::find($id);
        return view('modules.ambientes.editar',compact('Ambiente'));

    }
    public function actualizar(Request $request, $id){

        $Ambientes=Ambiente::find($id)->update($request->all());
        return redirect()->route('ambientes.index');
    }
}
