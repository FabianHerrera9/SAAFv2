@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"></div>
            <form action="{{route('docentes.update',$docentes->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tr>

                        <th>Identificacion  del docente</th>
                        <td><input type="text" name="Identificacion" class="form-control" value="{{$docentes->Identificacion}}"></td>
                    </tr>
                    <tr>

                        <th>Nombre del docente</th>
                        <td><input type="text" name="NomDocente" class="form-control" value="{{$docentes->NonmDocente}}"></td>
                    </tr>
                    <tr>

                        <th>Telefono del docente</th>
                        <td><input type="text" name="Telefono" class="form-control" value="{{$docentes->telefono}}"></td>
                    </tr>
                    <tr>

                        <th>Correo electronico</th>
                        <td><input type="text" name="Email" class="form-control" value="{{$docentes->Email}}"></td>
                    </tr>

                    <tr>

                        <th>tipo de identificacion</th>
                        <td><input type="text" name="directordegrupo" class="form-control" value="{{$docentes->TipoId}}"></td>
                    </tr>
                </table>
                <button type="submit"class="btn btn-dark">GUARDAR CAMBIOS</button>
                <a href="{{route('docentes.index')}}" class="btn btn-danger">CANCELAR</a>
            </form>
        </div>
    </div>



@endsection


