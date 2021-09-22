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




class ReportesController extends Controller
{
    public function index(){
        return view('modules.reportes.index');
    }
    public function Activos()
    {
        $activo = Activo::all();
        $prov=Proveedor::all();
        $usuarios=user::all();
        $pdf = PDF::loadView('modules.reportes.reportes_activos',compact('activo','prov','usuarios'));
        return $pdf->download('Activos.pdf');
    }

    public function Ambientes()
    {
        $Ambiente=Ambiente::all();
        $pdf= PDF::loadview('modules.reportes.reportes_ambientes',compact('Ambiente'));
        return $pdf->download('Ambientes.pdf');
    }

    public function Docentes()
    {
        $docentes = Docente::all();
        $pdf = PDF::loadview('modules.reportes.reportes_docentes', compact('docentes'));
        return $pdf->download('Docente.pdf');
    }

    public function Mantenimiento(){
        $mttogrt = Mantenimiento::all();
        $pdf= PDF::loadview('modules.reportes.reportes_mantenimiento',compact('mttogrt'));
        return $pdf->download('Mantenimiento.pdf');
    }

    public function Prestamos(){
        $prestamos = Prestamo::all();
        $ambiente=Ambiente::all();
        $activo=Activo::all();
        $docente=Docente::all();
        $usuario=User::all();
        $pdf =PDF::loadview('modules.reportes.reportes_prestamos', compact('prestamos','activo','docente','usuario','ambiente'));
        return $pdf->download('prestamos.pdf');
    }

    public function Proveedores(){

        $prov=Proveedor::all();
        $pdf= PDF::loadview('modules.reportes.reportes_proveedores',compact('prov'));
        return $pdf->download('Proveedor.pdf');

    }




}
