@extends('layouts.admin.app')
@section('title')
    | Lista de Asignaciones
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
                            <th># Asignacion</th>
                            <th>Fecha Asignacion</th>
                            <th>Activo Asignado</th>
                            <th>Asignado a Docente:</th>
                            <th>Ubicacion Ambiente / Salon</th>
                            <th>Estado Asignacion</th>
                            <th>Usuario que Registró</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($asignacion as $asignaciones)
                            <tr>
                                <td>{{ $asignaciones -> id }}</td>
                                <td>{{ $asignaciones -> Fecha }}</td>
                                @foreach($activo as $activos)
                                    @if($activos->id == $asignaciones -> IdActivo)
                                        <td>{{ $activos -> NombreActivo }}</td>
                                    @endif
                                @endforeach

                                @foreach($docente as $docentes)
                                    @if($docentes->id == $asignaciones->IdDocente)
                                        <td>{{ $docentes -> NomDocente }}</td>
                                    @endif
                                @endforeach

                                @foreach($ambiente as $ambientes)
                                    @if($ambientes->id == $asignaciones -> IdAmbiente)
                                        <td>{{ $ambientes -> NombreAMbiente }} | {{ $ambientes -> PisoAmbiente }}</td>
                                    @endif
                                @endforeach

                                <td>{{ $asignaciones -> Estado }}</td>

                                @foreach($usuario as $usuarios)
                                    @if($usuarios->id == $asignaciones -> IdUsuario)
                                        <td>{{ $usuarios -> Name }}</td>
                                    @endif
                                @endforeach

                                {{--<td>
                                    <i>
                                        <a href="{{route('ambientes.editar',$Ambientes->id)}}">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    </i>
                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

