@extends('layouts.admin.app')
@section('title')
    | REPORTES
@endsection
@section('content')

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

<center><h1 style="color:blue"> ACA ENCONTRARAS TODOS LOS REPORTES </h1></center>
<br>

<h2>Podras descargarlos dandole clic en el icono azul</h2>
<br>

<td>
    <i>
        <p>
            1. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS ACTIVOS
            <a href="/reportes/activos">
                <i class="bx bxs-user"></i>
            </a>
        </p>
    </i>
</td>

<td>
    <i>
        <p>
            2. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS AMBIENTES
        <a href="/reportes/ambientes">
            <i class="bx bxs-file"></i>
        </a>
        </p>
    </i>
</td>


<td>
    <i>
        <p>
           3. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS DOCENTES
            <a href="/reportes/docentes">
                <i class="bx bxs-map"></i>
            </a>
        </p>
    </i>
</td>


<td>
    <i>
        <p>
            4. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS MANTENIMIENTO
            <a href="/reportes/mantenimiento">
                <i class="bx bxs-building-house"></i>
            </a>
        </p>
    </i>
</td>


<td>
    <i>
        <p>
            5. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS PRESTAMOS
            <a href="/reportes/prestamos">
                <i class="bx bxs-megaphone"></i>
            </a>
        </p>
    </i>
</td>


<td>
    <i>
        <p>
            6. DALE CLIC PARA DESCARGAR EL REPORTE DE LOS PROVEEDORES
            <a href="/reportes/proveedores">
                <i class="bx bxs-x-circle"></i>
            </a>
        </p>
    </i>
</td>
</body>
</html>


@endsection

