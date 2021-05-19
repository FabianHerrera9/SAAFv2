<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Models\Activo;

class MantenimientoController extends Controller
{
    public function index(){
        $mttogrt = Mantenimiento::all();
        return view('modules.Mtto.listar',compact('mttogrt'));
    }
    public function crear(){
        $activo=Activo::all();
        return view('modules.Mtto.crear',compact('activo'));
    }
    public function guardar(Request $request){
        //$validate->;

        $mtto=Mantenimiento::create($request->all());
        return redirect()->route('Mttogarant.index');
    }
    public function mostrar($id){
        $mtto=Mantenimiento::find($id)->first();
        return view('modules.Mtto.detalles',compact('mtto'));
    }
}
