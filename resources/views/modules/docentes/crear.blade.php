@extends('layouts.admin.app')
@section('title')
    | Crear Docente
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('docentes.guardar')}}" method="post">
                    @csrf
                    <select name="TipoId" id="TipoId" class="form-select my-3 form-control"
                            aria-label="Seleccione el tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">Pasaporte</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Identificacion">Identificacion</label>
                        <input type="text" class="form-control" id="Identificacion" name="Identificacion">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NomDcocente">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="NomDcocente" name="NomDocente">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="IdEspecialidad">Especialidad</label>
                        <input type="text" class="form-control" id="IdEspecialidad" name="IdEspecialidad"
                               placeholder="Matematicas/Biologia/Informatica....">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Telefono">Numero telefonico</label>
                        <input type="text" class="form-control" id="Telefono" name="Telefono">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="number" class="form-control" id="Email" name="Email">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Docente</button>
                    <a type="button" class="btn" id="color-font" href="{{route('docentes.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



