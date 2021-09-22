@extends('layouts.admin.app')
@section('title')
    | REPORTES
@endsection
@section('content')
<style>
    a{
        color: #2a3042;
    }
</style>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPORTES</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="table-responsive">
                    <td>
                        <tr>
                            <h1>
                                <a href={{route('reportes.reportes_activos')}}>
                                    <i class="bx bx-buildings"> Activos </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.reportes_prestamos')}}>
                                    <i class="bx bx-laptop"> Asignaciones y Prestamos </i>
                                </a>
                            </h1>
                        </tr>
                        <tr>
                            <h1>
                                <a href={{route('reportes.reportes_mantenimiento')}}>
                                    <i class="bx bx-wrench">Mantenimientos y Garantias</i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.reportes_proveedores')}}>
                                    <i class="bx bx-store-alt"> Proveedores </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reporte.reportes_docentes')}}>
                                    <i class="bx bx-group"> Docentes </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.reportes_ambientes')}}>
                                    <i class="bx bx-paper-plane"> Ambientes </i>
                                </a>
                            </h1>
                        </tr>
                    </td>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection

