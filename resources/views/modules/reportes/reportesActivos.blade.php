@extends('layouts.admin.app')
@section('title')
    | REPORTES
@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th># Registro</th>
                            <th>NombreActivo</th>
                            <th>Serial</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descripcion</th>
                            <th>Garantia</th>
                            <th>Tipo de Activo</th>
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
                                <td>{{ $activos -> descripcion }}</td>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
