<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Ambiente;
use App\Models\Mantenimiento;
use App\Models\Prestamo;
use App\Models\Proveedor;
use App\Models\user;
use App\models\Docente;
use Barryvdh\DomPDF\Facade as PDF;




class ReportesController extends Controller
{
    public function index(){
        return view('modules.reportes.index');
    }
    public function download()
    {
        $activo = Activo::all();
        $prov=Proveedor::all();
        $usuarios=user::all();
        $pdf = PDF::loadview('modules.reportes.reportes_activos',compact('activo','prov','usuarios'));
        return $pdf->download('Activos.pdf');
    }

    public function descargar()
    {
        $Ambiente=Ambiente::all();
        $pdf= PDF::loadview('modules.reportes.reportes_ambientes',compact('Ambiente'));
        return $pdf->download('Ambientes.pdf');
    }


        public function descar(){
        $docentes = Docente::all();
        $pdf= PDF::loadview('modules.reportes.reportes_docentes',compact('docentes'));
        return $pdf->download('Docentes.pdf');
    }

    public function pdf(){
        $mttogrt = Mantenimiento::all();
        $pdf= PDF::loadview('modules.reportes.reportes_mantenimiento',compact('mttogrt'));
        return $pdf->download('Mantenimiento.pdf');
    }

    public function acomodar(){
        $prestamos = Prestamo::all();
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=User::all();
        $pdf =PDF::loadview('modules.reportes.reportes_prestamos', compact('prestamos','activo','docente','usuario','ambiente'));
        return $pdf->download('prestamos.pdf');
    }

    public function modulo(){
        $prov=Proveedor::all();
        $pdf= PDF::loadview('modules.reportes.reportes_proveedores',compact('prov'));
        return $pdf->download('Proveedores.pdf');
    }




}
