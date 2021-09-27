<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Ambiente;
use App\Models\Mantenimiento;
use App\Models\Prestamo;
use App\Models\Proveedor;
use App\models\Docente;
use App\models\user;
use Barryvdh\DomPDF\Facade as PDF;




class DescargarPDFController extends Controller
{
    public function index(){
        return view('modules.reportes.index');
    }
    public function Activos()
    {
        $activo = Activo::all();
        $prov=Proveedor::all();
        $usuarios=user::all();
        $pdf = PDF::loadView('modules.reportes.activos',compact('activo','prov','usuarios'));
        return $pdf->setpaper('a4','landscape')->stream('Activos.pdf');
        //return view('modules.reportes.activos', compact('activo','prov','usuarios'));

    }

    public function Ambientes()
    {
        $Ambiente=Ambiente::all();
        $pdf= PDF::loadview('modules.reportes.ambientes',compact('Ambiente'));
        return $pdf->setpaper('a4','landscape')->stream('Ambientes.pdf');
    }

    public function Docentes()
    {
        $docentes = Docente::all();
        $pdf = PDF::loadview('modules.reportes.docentes', compact('docentes'));
        return $pdf->setpaper('a4','landscape')->stream('Docentes.pdf');
    }

    public function Mantenimiento(){
        $mttogrt = Mantenimiento::all();
        $activos= Activo::all();
        $pdf= PDF::loadview('modules.reportes.mantenimiento',compact('mttogrt','activos'));
        return $pdf->setpaper('a4','landscape')->stream('Mantenimiento.pdf');
    }

    public function Prestamos(){
        $prestamos = Prestamo::all();
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=User::all();
        $pdf =PDF::loadview('modules.reportes.prestamos', compact('prestamos','activo','docente','usuario','ambiente'));
        return $pdf->setpaper('a4','landscape')->stream('Prestamos.pdf');
    }

    public function Proveedores(){

        $prov=Proveedor::all();
        $pdf= PDF::loadview('modules.reportes.proveedores',compact('prov'));
        return $pdf->setpaper('a4','landscape')->stream('Proveedores.pdf');

    }




}
