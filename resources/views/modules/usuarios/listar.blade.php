@extends('layouts.admin.app')
@section('title')
    | Lista de Usuarios
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
                    <table class="table  table-hover">
                        <thead>
                        <tr>
                            <th>Tipo Identificacion</th>
                            <th>Identificacion</th>
                            <th>Nombres</th>
                            <th>Cargo</th>
                            <th>Rol</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usu)
                            <tr>
                                <td>{{ $usu -> Tipoid }}</td>
                                <td>{{ $usu -> Identificacion }}</td>
                                <td>{{ $usu -> Name }}</td>
                                <td>{{ $usu -> Job }}</td>
                                <td>{{ $usu -> Rol }}</td>
                                <td>{{ $usu -> Tel }}</td>
                                <td>{{ $usu -> Email }}</td>
                                <td>
                                    <i>
                                        <a href="{{route('usuarios.editar',$usu->IDENTIFICACIONUSU)}}">
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
