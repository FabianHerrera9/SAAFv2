@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="btn-group d-md-block">
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <thead>
                                <tr class="table-dark">
                                    <th>Tipo Identificacion</th>
                                    <th>Identificacion</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
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
                <div class="col-p2 p-2 m-3 text-center bck-tab">
                    <hr>
                    <a class="btn btn-add btn-lg btn-block" href="{{route('usuarios.crear')}}">AGREGAR &nbsp; <i
                            class="fas fa-plus-circle"></i></a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
