@extends('layouts.admin.app')
@section('title')
    | REPORTE DE MANTENIMIENTO
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
                            <th>ID de Registro</th>
                            <th>Tipo de Registro</th>
                            <th>Fecha</th>
                            <th>Proveedor/Reparador</th>
                            <th>Solucionado</th>
                            <th>Activo</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mttogrt as $mtto)
                            <tr>
                                <td>{{ $mtto -> id }}</td>
                                <td>{{ $mtto -> Tipo }}</td>
                                <td>{{ $mtto -> Fecha }}</td>
                                <td>{{ $mtto -> ProveedorServ }}</td>
                                <td>{{ $mtto -> Solucion }}</td>
                                <td>{{ $mtto -> IdActivo }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

