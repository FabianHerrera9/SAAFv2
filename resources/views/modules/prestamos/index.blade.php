@extends('layouts.admin.app')
@section('title')
    | Listado de Prestamos
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
                            <th> Tipo </th>
                            <th>Fecha Inicio</th>
                            <th>Activo</th>
                            <th>Asignado a</th>
                            <th>Ubicacion Ambiente / Salon</th>
                            <th>Estado Asignacion</th>
                            <th>Fecha Fin Prestamo</th>
                            <th>Asignado Por</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prestamos as $prestamo)
                            @foreach($activo as $activos)
                                @foreach($docente as $docentes)
                                    @foreach($usuario as $usuarios)
                                        @foreach($ambiente as $ambientes)
                                            <tr>
                                                <td>{{ $prestamo -> Tipo }}</td>
                                                <td>{{ $prestamo -> FechaPrestamo }}</td>
                                                @if($prestamo->IdActivo == $activos->id)
                                                    <td>{{ $activos -> NombreActivo }}</td>
                                                @endif
                                                @if($prestamo->IdDocente == $docentes->id)
                                                    <td>{{ $docentes -> NomDocente }}</td>
                                                @endif
                                                @if($prestamo->IdAmbiente == $ambientes->id)
                                                    <td>{{ $ambientes -> PisoAmbiente }} || {{ $ambientes -> NombreAMbiente }}</td>
                                                @endif
                                                @if($prestamo->IdUsuario == $usuarios->id)
                                                    <td>{{ $usuarios -> Name }}</td>
                                                @endif
                                                <td>{{ $prestamo -> FechaDevolucion }}</td>
                                                {{--<td>
                                                     <i>
                                                         <a href="{{route('prestamos.editar',$prestamo->id)}}">
                                                             <i class="bx bx-edit"></i>
                                                         </a>
                                                     </i>
                                                 </td>--}}
                                            </tr>
                                        @endforeach
                                    @endforeach
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

