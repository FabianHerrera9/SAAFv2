@extends('layouts.admin.app')
@section('title')
    | Lista de Usuarios
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="table-responsive">
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usu)
                            <tr>
                                <td>{{ $usu -> IDTIPOID }}</td>
                                <td>{{ $usu -> IDENTIFICACIONUSU }}</td>
                                <td>{{ $usu -> NOMBREUSU }}</td>
                                <td>{{ $usu -> CARGOUSU }}</td>
                                <td>{{ $usu -> ROL }}</td>
                                <td>{{ $usu -> TELEFONOUSU }}</td>
                                <td>{{ $usu -> CORREOUSU }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
