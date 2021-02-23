@extends('layouts.admin.app')
@section('title')
    | Lista de Activos
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
                    <table class="table">
                        <thead>
                        <tr>
                            <th># Registro</th>
                            <th>NombreActivo</th>
                            <th>Marca</th>
                            <th>Tipo de Activo</th>
                            <th>Proveedor</th>
                            <th>Usuario que registra</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activo as $activos)
                            @foreach($prov as $provs)
                                @foreach($usuarios as $usu)
                                    <tr>
                                        <td>{{ $activos -> id }}</td>
                                        <td>{{ $activos -> NombreActivo }}</td>
                                        <td>{{ $activos -> Marca }}</td>
                                        <td>{{ $activos -> TipoActivo }}</td>
                                        @if($provs->id == $activos->IdProveedor)
                                            <td>{{ $provs -> ProvName }}</td>
                                        @endif
                                        @if($usu->id == $activos->IdUsuario)
                                            <td>{{ $usu -> Name }}</td>
                                        @endif
                                        <td>
                                            <i>
                                                <a href="{{route('activos.editar',$activos->id)}}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                            </i>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

