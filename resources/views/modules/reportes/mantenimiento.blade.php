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
    <h1>REPORTES DE MANTENIMIENTO</h1>
</header>
                    <table class="table  table-hover">
                        <thead>
                        <tr>
                            <th>ID de Registro</th>
                            <th>Tipo de Registro</th>
                            <th>Fecha</th>
                            <th>Proveedor</th>
                            <th>Solucionado</th>
                            <th>Activo</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mttogrt as $mtto)
                            <tr>
                                <td>{{ $mtto -> id }}</td>
                                <td>{{ $mtto -> Tipo }}</td>
                                <td>{{ $mtto -> Fecha }}</td>
                                <td>{{ $mtto -> ProveedorServ }}</td>
                                <td>{{ $mtto -> Solucion }}</td>
                                <td>{{ $mtto -> IdActivo }}</td>

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


