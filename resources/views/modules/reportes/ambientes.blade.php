<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REPORTES DE AMBIENTES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            top: 1cm;
            left: 2cm;
            right: 2cm;
            height: 2cm;
            background-color: white;
            color: white;
            text-align: right;
            line-height: 30px;

        }

        footer {
            position: fixed;
            bottom: 5cm;
            left: 5cm;
            right: 20cm;
            height: 2cm;
            background-color:white;
            color: white;
            text-align: center;
            line-height: 35px;
            clear: both;
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>


<main style="text-align: right" >

    <div class="table-responsive-md" style="width: 75%">

        <DIV>
            <img style=" position:absolute; width:200px; height:130px; top: 0px; left: 0px "  src="data:image/jpeg;base64,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">
        </DIV>


        <h2 style="text-align: right"><strong>AMBIENTES</strong></h2>

        <table class="table table-bordered colgroup col">
            <thead style="background-color: darkgrey">

        <tr style="text-align:center">
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
    </div>
</main>
<footer>

</footer>
</body>
</html>


