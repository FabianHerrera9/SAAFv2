@extends('layouts.admin.app')
@section('title')
    | Reportes
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
                                <a target="_blank" href={{route('reportes.activos')}}>
                                    <i class="bx bx-buildings"> Activos </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.prestamos')}}>
                                    <i class="bx bx-laptop"> Asignaciones y Prestamos </i>
                                </a>
                            </h1>
                        </tr>
                        <tr>
                            <h1>
                                <a href={{route('reportes.mantenimiento')}}>
                                    <i class="bx bx-wrench">Mantenimientos y Garantias</i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.proveedores')}}>
                                    <i class="bx bx-store-alt"> Proveedores </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reporte.docentes')}}>
                                    <i class="bx bx-group"> Docentes </i>
                                </a>
                            </h1>
                        </tr>

                        <tr>
                            <h1>
                                <a href={{route('reportes.ambientes')}}>
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

