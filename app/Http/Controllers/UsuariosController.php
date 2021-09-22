<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

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
            'Img'=>'required'
            ]);

        $usuario=User::create(
        [    'Identificacion'=> $request->Identificacion,
            'name'=>$request->name,
            'Cargo'=>$request->Cargo,
            'Tel'=>$request->Tel,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'Estado'=>$request->Estado,
            'Tipoid'=>$request->Tipoid,
            'Rol'=>$request->Rol]
        );

        return redirect()->route('usuarios.index')->with([
            'message'=>'Usuario Creado Con exito',
            'type'=>'success'
        ]);
    }
    public function editar($id){

        $roles = Role::all();

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
    public function detalle(){

        $usuario = User::all();
        return view('modules.usuarios.show',compact('usuario'));
    }
}
