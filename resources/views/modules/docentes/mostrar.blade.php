@extends('layouts.admin.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3"></div>
        <table class="table">
            <tr>

                <th>Numero de identificacion</th>
                <td>{{$docentes->Identificacion}}</td>
            </tr>
            <tr>
                <th>Nombre del docente</th>
                <td>{{$docentes->NomDocente}}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{$docentes->Telefono}}</td>
            </tr>
            <tr>
                <th>Correo electronico</th>
                <td>{{$docentes->Email}}</td>
            </tr>
            <tr>
                <th>Tipo de identificacion</th>
                <td>{{$docentes->TipoId}}</td>
            </tr>

            <tr>

        </table>
        <a href="{{route('docente.index')}}" class="btn btn-danger">VOLVER</a>
        <a href="{{route('docente.edit',$docentes->id)}}"class="btn btn-warning">EDITAR</a>
    </div>
</div>


@endsection

