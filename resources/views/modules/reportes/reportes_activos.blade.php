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
    <h1>REPORTES DE ACTIVOS</h1>
</header>

    <table class="table">
        <thead>
        <tr>
            <th># Registro</th>
            <th>NombreActivo</th>
            <th>SN</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Garantia</th>
            <th>Tipo </th>
            <th>Proveedor</th>
            <th>Usuario que registra</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($activo as $activos)
            <tr>
                <td>{{ $activos -> id }}</td>
                <td>{{ $activos -> NombreActivo }}</td>
                <td>{{ $activos -> SN }}</td>

                <td>{{ $activos -> Marca }}</td>
                <td>{{ $activos -> Modelo }}</td>
                <td>{{ $activos -> Garantia }}</td>
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
        <footer>
            <h1>2021 © CADSI</h1>
        </footer>
    </body>
    </html>


