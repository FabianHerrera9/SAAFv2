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
                                    <th>Identificacion</th>
                                    <th>NomDocente</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>TipoId</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($docentes as $doc)
                                    <tr>
                                        <td>{{ $doc -> Identificacion }}</td>
                                        <td>{{ $doc -> NomDocente }}</td>
                                        <td>{{ $doc -> Telefono }}</td>
                                        <td>{{ $doc -> Email }}</td>
                                        <td>{{ $doc -> TipoId }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
