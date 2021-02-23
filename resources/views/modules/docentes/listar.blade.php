@extends('layouts.admin.app')
@section('title')
    | Lista de Docentes
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="table-responsive">
                    @if(session('message'))
                        <div class="alert alert-{{session('type')}} mt-3" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                        <tr class="table">
                            <th>TipoId</th>
                            <th>Identificacion</th>
                            <th>NomDocente</th>
                            <th>Especialidad</th>
                            <th>Telefono</th>
                            <th>Email</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($docentes as $doc)
                            <tr>
                                <td>{{ $doc -> TipoId }}</td>
                                <td>{{ $doc -> Identificacion }}</td>
                                <td>{{ $doc -> NomDocente }}</td>
                                <td>{{ $doc -> IdEspecialidad }}</td>
                                <td>{{ $doc -> Telefono }}</td>
                                <td>{{ $doc -> Email }}</td>
                                <td>
                                    <i>
                                        <a href="{{route('docentes.editar',$doc->id)}}">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    </i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
