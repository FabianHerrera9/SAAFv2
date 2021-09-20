@extends('layouts.admin.app')
@section('title')
    | REPORTE DE PROVEEDORES
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
                            <th>Tipo identificacion</th>
                            <th>N° Identificacion</th>
                            <th>Nombre Proveedor</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Tipo Proveedor</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prov as $provs)
                            <tr>
                                <td>{{ $provs -> Tipoid }}</td>
                                <td>{{ $provs -> Provid }}</td>
                                <td>{{ $provs -> ProvName }}</td>
                                <td>{{ $provs -> Tel }}</td>
                                <td>{{ $provs -> Email }}</td>
                                <td>{{ $provs -> ProvDir }}</td>
                                <td>{{ $provs -> Tipoprov }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
