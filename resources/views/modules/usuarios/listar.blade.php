@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row m-1">
            <div class="col-p1 m-3 bck-tab">
                <div class="table-responsive">
                    <div class="pt-3 pl-3 pr-3">
                        <h3><b>USUARIOS</b></h3>
                    </div>
                    <div class="p-3">
                        <table class="table">
                            <thead>
                            <tr>
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

                                    <button type="submit" class="btn btn-link">
                                        <i class="fas fa-user-times text-danger"></i>
                                    </button>
                                    </td>
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

@endsection
