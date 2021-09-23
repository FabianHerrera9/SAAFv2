<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <h1>REPORTES DE AMBIENTES</h1>
</header>
<table class="table  table-hover">
    <thead>
    <tr>
        <th>Piso Ambiente</th>
        <th>Nombre Ambiente</th>
        <th>Responsable</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Ambiente as $Ambientes)
        <tr>
            <td>{{ $Ambientes -> PisoAmbiente }}</td>
            <td>{{ $Ambientes -> NombreAMbiente }}</td>
            @if($Ambientes -> Responsable == '')
                <td> Sin Responsable Asignado</td>
            @else
                <td>{{ $Ambientes -> Responsable }}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
</tbody>
<footer>
    <h1>2021 © CADSI</h1>
</footer>
</body>
</html>


