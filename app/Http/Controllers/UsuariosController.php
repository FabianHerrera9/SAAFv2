<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios=Usuarios::all();
        return view('modules.usuarios.listar',compact('usuarios'));
    }
    public function crear(){

        return view('modules.usuarios.crear');
    }
    public function guardar(Request $request){
        $validar=$request->validate([
            'Identificacion'=>'required|number|max:15',
            'Name'=>'required|max:30',
            'Job'=>'required|max:10',
            'Tel'=>'required|max:15',
            'Email'=>'required|max:30',
            'Password'=>'required',
            'Estado'=>'required',
            'Tipoid'=>'required',
            'Rol'=>'required',
            ]);
        $usuario=Usuarios::create($request->all());
        return redirect()->route('usuarios.index')->with([
            'message'=>'Usuario Creado Con exito',
            'type'=>'success'
        ]);
    }
    public function editar($id){

        $usuarios=Usuarios::find($id);
        return view('modules.usuarios.editar',compact('usuarios'));
    }
    public function actualizar(Request $request,$id){
        $validar=$request->validate([
            'Identificacion'=>'required|max:15',
            'Name'=>'required|max:30',
            'Job'=>'required|max:10',
            'Tel'=>'required|max:15',
            'Email'=>'required|max:30',
            'Password'=>'required',
            'Estado'=>'required',
            'Tipoid'=>'required',
            'Rol'=>'required',
        ]);
        $usuarios=Usuarios::find($id)->update($request->all());
        return redirect()->route('usuarios.index')->with([
            'message'=>'La actualizacion se ha generado correctamente',
            'type'=>'warning'
        ]);

    }
}
