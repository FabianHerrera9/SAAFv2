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
                    <div>
                        <select name="TipoId" id="TipoId" class="form-select my-3 form-control"
                                aria-label="Seleccione el tipo de documento">
                            <option value=" ">Seleccione tipo de documento</option>
                            <option value="C.C.">C.C.</option>
                            <option value="C.E.">C.E.</option>
                            <option value="P.P.">P.P.</option>
                        </select>
                        @if($errors->has('TipoId'))
                            <label for="" style="color:red;">{{ $errors->first('TipoId') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Identificacion">Identificacion</label>
                        <input type="text   " class="form-control" id="Identificacion" name="Identificacion">
                        @if($errors->has('Identificacion'))
                            <label for="" style="color:red;">{{ $errors->first('Identificacion') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NomDocente">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="NomDocente" name="NomDocente">
                        @if($errors->has('NomDocente'))
                            <label for="" style="color:red;">{{ $errors->first('NomDocente') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="IdEspecialidad">Especialidad</label>
                        <input type="text" class="form-control" id="IdEspecialidad" name="IdEspecialidad"
                               placeholder="Matematicas/Biologia/Informatica....">
                        @if($errors->has('IdEspecialidad'))
                            <label for="" style="color:red;">{{ $errors->first('IdEspecialidad') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Telefono">Numero telefonico</label>
                        <input type="text" class="form-control" id="Telefono" name="Telefono">
                        @if($errors->has('Telefono'))
                            <label for="" style="color:red;">{{ $errors->first('Telefono') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" id="Email" name="Email">
                        @if($errors->has('Email'))
                            <label for="" style="color:red;">{{ $errors->first('Email') }}</label>
                            <br>
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Docente</button>
                    <a type="button" class="btn" id="color-font" href="{{route('docentes.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



