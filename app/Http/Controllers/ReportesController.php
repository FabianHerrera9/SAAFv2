<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Ambiente;
use App\Models\Mantenimiento;
use App\Models\Prestamo;
use App\Models\Proveedor;
use App\Models\user;
use App\models\Docente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;



class ReportesController extends Controller
{
    public function index(){
        return view('modules.reportes.index');
    }
    public function download()
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(Activo::all());
        return $pdf->download('Activos.pdf');
    }

    public function descargar()
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(ambiente::all());
        return $pdf->download('Ambientes.pdf');
    }


        public function descar(){
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(Docente::all());
        return $pdf->download('Docentes.pdf');
    }

    public function pdf(){
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(Mantenimiento::all());
        return $pdf->download('Mantenimiento.pdf');
    }

    public function acomodar(){
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(Prestamo::all());
        return $pdf->download('Prestamo.pdf');
    }

    public function modulo(){
        $pdf = app('dompdf.wrapper');
        $pdf->loadhtml(Proveedor::all());
        return $pdf->download('Proveedor.pdf');
    }




}
