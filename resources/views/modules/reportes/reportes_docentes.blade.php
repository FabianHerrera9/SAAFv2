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
    <h1>REPORTES DE DOCENTES</h1>
</header>
    <table class="table table-hover">
                        <thead>
                        <tr class="table">
                            <th>TipoId</th>
                            <th>Identificacion</th>
                            <th>Nombre del Docente</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Especialidad</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($docentes as $doc)
                            <tr>
                                <td>{{ $doc -> TipoId }}</td>
                                <td>{{ $doc -> Identificacion }}</td>
                                <td>{{ $doc -> NomDocente }}</td>
                                <td>{{ $doc -> Telefono }}</td>
                                <td>{{ $doc -> Email }}</td>
                                <td>{{ $doc -> IdEspecialidad }}</td>


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
