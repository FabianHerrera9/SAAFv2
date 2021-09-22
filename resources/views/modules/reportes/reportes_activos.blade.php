<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE ACTIVOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        colgroup {
            border: black 7px solid;
        }
        col {
            border: black 5px solid;
        }



        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: white;
            color: white;
            text-align:right;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color:;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <img src="isidrio.jpg">
</header>
<main>
    <div class="table-responsive-md">
    <h2 style="text-align: center"><strong>REPORTE DE ACTIVOS</strong></h2>
<table class="table table-bordered colgroup col " >
    <thead>
    <tr class="table-secondary" >
        <th  scope="col">Registro</th>
        <th  scope="col">Activo</th>
        <th  scope="col">Marca</th>
        <th  scope="col">Tipo de Activo</th>
        <th  scope="col">Proveedor</th>
        <th  scope="col">Registra</th>
    </tr>
    </thead>
    <tbody>
    @foreach($activo as $activos)
        <tr>
            <td scope="row">{{ $activos -> id }}</td>
            <td>{{ $activos -> NombreActivo }}</td>
            <td>{{ $activos -> Marca }}</td>
            <td>{{ $activos -> TipoActivo }}</td>

            @foreach($prov as $provs)
                @if($provs->id == $activos->IdProveedor)

                    <td>{{ $provs -> ProvName }}</td>

                @endif
            @endforeach

            @foreach($usuarios as $usu)
                @if($usu->id == $activos->IdUsuario)

                    <td>{{ $usu -> name }}</td>

                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
</main>
<footer>

</footer>
</body>
</html>

