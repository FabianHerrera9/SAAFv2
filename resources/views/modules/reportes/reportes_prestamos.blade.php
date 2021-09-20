@extends('layouts.admin.app')
@section('title')
    | REPORTE DE PRESTAMOS
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
                            <th>Id prestamo </th>
                            <th> Tipo </th>
                            <th>Fecha Inicio</th>
                            <th>Activo</th>
                            <th>Estado Asignacion</th>
                            <th>Fecha Fin Prestamo</th>
                            <th>Asignado Por</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($prestamos as $prestamo)
                                <td>{{ $prestamo->id }}</td>
                                <td>{{ $prestamo->Tipo }}</td>
                                <td>{{ $prestamo->FechaPrestamo }}</td>
                                @foreach($activo as $activos)
                                    @if($prestamo->IdActivo == $activos->id)
                                        <td>{{ $activos -> NombreActivo }}</td>
                                    @endif
                                @endforeach
                                <td>{{$prestamo->Estado}}</td>
                                <td>{{$prestamo->FechaDevolucion }}</td>
                                @foreach($usuario as $usuarios)
                                    @if($prestamo->IdUsuario == $usuarios->id)
                                        <td>{{ $usuarios -> name }}</td>
                                    @endif
                                @endforeach
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

