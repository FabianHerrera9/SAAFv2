@extends('layouts.admin.app')
@section('title')
    | Edicion de Docentes
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive"></div>
            <form action="{{route('docentes.actualizar',$docentes->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <div class="my-3">
                        <label for="">Tipo de documento</label>
                        <select name="TipoId" id="TipoId" class="form-select form-control"
                                aria-label="selecionar tipo de documento">
                            <option value="{{$docentes->TipoId}}">{{$docentes->TipoId}}</option>
                            <option>selecionar tipo de documento</option>
                            <option value="NIT">NIT</option>
                            <option value="CC">C.C.</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label>Identificacion del docente</label>
                        <input type="text" name="Identificacion" class="form-control"
                               value="{{$docentes->Identificacion}}">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="NomDocente">Nombre del docente</label>
                        <input type="text" name="NomDocente" id="NomDocente" class="form-control" value="{{$docentes->NomDocente}}">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Telefono">Telefono del docente</label>
                        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{$docentes->Telefono}}">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="IdEspecialidad">Especialidad</label>
                        <input type="text" name="IdEspecialidad" id="IdEspecialidad" class="form-control" value="{{$docentes->IdEspecialidad}}">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Email">Correo electronico</label>
                        <input type="text" name="Email" id="Email" class="form-control" value="{{$docentes->Email}}">
                    </div>
                </table>
                <button type="submit" class="btn btn-success">Agregar Usuario</button>
                <a type="button" class="btn" id="color-font" href="{{route('docentes.index')}}">Cancelar</a>
            </form>
        </div>
    </div>



@endsection


