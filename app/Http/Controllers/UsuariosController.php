<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

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
        $usuario=Usuarios::create($request->all());
        return redirect()->route('usuarios.index');
    }
}
