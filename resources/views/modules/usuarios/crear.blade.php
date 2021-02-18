@extends('layouts.admin.app')
@section('title')
    | Crear Usuario
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('usuarios.guardar')}}" method="post">
                    @csrf
                    <select name="IDTIPOID" id="IDTIPOID" class="form-select my-3 form-control"
                            aria-label="selecionar tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">P.P.</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="IDENTIFICACIONUSU">Identificacion</label>
                        <input type="text" class="form-control" id="IDENTIFICACIONUSU" name="IDENTIFICACIONUSU">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NOMBREUSU">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="NOMBREUSU" name="NOMBREUSU">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="CARGOUSU">Cargo</label>
                        <input type="text" class="form-control" id="CARGOUSU" name="CARGOUSU"
                               placeholder="Rector/Tesorero/Secretari">
                    </div>
                    <select name="ROL" id="ROL" class="form-select my-3 form-control" aria-label="Seleccione Rol del Sistema">
                        <option>Seleccione Rol del Sistema</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Tesorero">Tesorero</option>
                        <option value="Contador ">Contador</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="TELEFONOUSU">Telefono</label>
                        <input type="number" class="form-control" id="TELEFONOUSU" name="TELEFONOUSU">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="CORREOUSU">Correo</label>
                        <input type="email" class="form-control" id="CORREOUSU" name="CORREOUSU"
                               placeholder="Ejemplo@saaf.com">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="CONTASEÑAUSU">Contraseña</label>
                        <input type="text" class="form-control" id="CONTASEÑAUSU" name="CONTASEÑAUSU">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                    <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

