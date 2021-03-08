@extends('layouts.admin.app')
@section('title')
    | Lista de Ambientes
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
                            <th>Piso Ambiente</th>
                            <th>Nombre Ambiente</th>
                            <th>Responsable</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Ambiente as $Ambientes)
                            <tr>
                                <td>{{ $Ambientes -> PisoAmbiente }}</td>
                                <td>{{ $Ambientes -> NombreAMbiente }}</td>
                                @if($Ambientes -> Responsable == '')
                                <td> Sin Responsable Asignado</td>
                                @else
                                    <td>{{ $Ambientes -> Responsable }}</td>
                                @endif
                                <td>
                                    <i>
                                        <a href="{{route('ambientes.editar',$Ambientes->id)}}">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    </i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

