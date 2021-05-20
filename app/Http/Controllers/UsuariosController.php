<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios=User::all();
        return view('modules.usuarios.listar',compact('usuarios'));
    }
    public function crear(){

        return view('modules.usuarios.crear');
    }
    public function guardar(Request $request){
        $validar=$request->validate([
            'Identificacion'=>'required|max:15',
            'name'=>'required|max:30',
            'Cargo'=>'required|max:10',
            'Tel'=>'required|max:15',
            'email'=>'required|max:30',
            'password'=>'required',
            'Estado'=>'required',
            'Tipoid'=>'required',
            'Rol'=>'required',
            ]);
        $usuario=User::create($request->all());
        return redirect()->route('usuarios.index')->with([
            'message'=>'Usuario Creado Con exito',
            'type'=>'success'
        ]);
    }
    public function editar($id){

        $usuarios=User::find($id);
        return view('modules.usuarios.editar',compact('usuarios'));
    }
    public function actualizar(Request $request,$id){
        $validar=$request->validate([
            'Identificacion'=>'required|max:15',
            'name'=>'required|max:30',
            'Cargo'=>'required|max:10',
            'Tel'=>'required|max:15',
            'email'=>'required|max:30',
            'password'=>'required',
            'Estado'=>'required',
            'Tipoid'=>'required',
            'Rol'=>'required',
        ]);
        $usuarios=User::find($id)->update($request->all());
        return redirect()->route('usuarios.index')->with([
            'message'=>'La actualizacion se ha generado correctamente',
            'type'=>'warning'
        ]);

    }
}
