@extends('layouts.admin.app')
@section('title')
    | Editar docentes
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"></div>
            <form action="{{route('docente.update',$docente->id)}}" method="post">
                @csrf
                @method('PUT')
                    <select name="TipoId" id="TipoId" class="form-select my-3 form-control"
                            aria-label="selecionar tipo de documento">
                        <option value="{{$docente->TipoId}}">{{$docente->TipoId}}</option>
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">P.P.</option>
                    </select>
                <div class="form-floating mb-3">
                    <label for="Identificacion">{{$docente->Identificacion}}</label>
                    <input type="text" class="form-control" id="Identificacion" name="Identificacion"
                           value="{{$docente->Identificacion}}">
                </div>
                <div class="form-floating mb-3">
                    <label for="NomDocente">{{$docente->NomDocente}}</label>
                    <input type="text" class="form-control" id="NomDocente" name="NomDocente"
                           value="{{$docente->NomDocente}}">
                </div>
                <div class="form-floating mb-3">
                    <label for="IdEspecialidad">{{$docente->IdEspecialidad}}</label>
                    <input type="text" class="form-control" id="IdEspecialidad" name="IdEspecialidad"
                           value="{{$docente->IdEspecialidad}}">
                </div>
                <div class="form-floating mb-3">
                    <label for="Telefono">{{$docente->Telefono}}</label>
                    <input type="text" class="form-control" id="Telefono" name="Telefono"
                           value="{{$docente->Telefono}}">
                </div>
                <div class="form-floating mb-3">
                    <label for="Email">{{$docente->Email}}</label>
                    <input type="text" class="form-control" id="Email" name="Email"
                           value="{{$docente->Email}}">
                </div>
                <button type="submit"class="btn btn-dark">GUARDAR CAMBIOS</button>
                <a href="{{route('docentes.index')}}" class="btn btn-danger">CANCELAR</a>
            </form>
        </div>
    </div>
@endsection


