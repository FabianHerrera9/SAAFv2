<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function listar(){
        $prov=Proveedor::all();
        return view('modules.proveedores.listar',compact('prov'));
    }
    public function crear(){
        return view('modules.proveedores.crear');
    }
    public function guardar(Request $request){
        $prov=Proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }
    public function editar($id){
        $prov=Proveedor::find($id);
        return view('modules.proveedores.editar',compact('prov'));
    }
    public function actualizar(Request $request,$id){

        $prov=Proveedor::find($id)->update($request->all());
        return redirect()->route('proveedores.index');

    }
}
