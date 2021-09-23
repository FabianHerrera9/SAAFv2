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
    <h1>REPORTES DE PRESTAMOS</h1>
</header>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id prestamo </th>
                            <th> Tipo </th>
                            <th>Fecha Inicio</th>
                            <th>Activo</th>
                            <th>Estado Asignacion</th>
                            <th>Fecha Fin Prestamo</th>
                            <th>Asignado Por</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($prestamos as $prestamo)
                                <td>{{ $prestamo->id }}</td>
                                <td>{{ $prestamo->Tipo }}</td>
                                <td>{{ $prestamo->FechaPrestamo }}</td>
                                @foreach($activo as $activos)
                                    @if($prestamo->IdActivo == $activos->id)
                                        <td>{{ $activos -> NombreActivo }}</td>
                                    @endif
                                @endforeach
                                <td>{{$prestamo->Estado}}</td>
                                <td>{{$prestamo->FechaDevolucion }}</td>
                                @foreach($usuario as $usuarios)
                                    @if($prestamo->IdUsuario == $usuarios->id)
                                        <td>{{ $usuarios -> name }}</td>
                                    @endif
                                @endforeach
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
</tbody>
<footer>
    <h1>2021 © CADSI</h1>
</footer>
</body>
</html>

