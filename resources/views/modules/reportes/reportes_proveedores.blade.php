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
    <h1>REPORTES DE PROVEEDORES</h1>
</header>
                    <table class="table  table-hover">
                        <thead>
                        <tr>
                            <th>Tipo identificacion</th>
                            <th>Identificacion</th>
                            <th>Nombre Proveedor</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Tipo Proveedor</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prov as $provs)
                            <tr>
                                <td>{{ $provs -> Tipoid }}</td>
                                <td>{{ $provs -> Provid }}</td>
                                <td>{{ $provs -> ProvName }}</td>
                                <td>{{ $provs -> Tel }}</td>
                                <td>{{ $provs -> Email }}</td>
                                <td>{{ $provs -> ProvDir }}</td>
                                <td>{{ $provs -> Tipoprov }}</td>
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

