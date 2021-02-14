@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row m-1">
            <div class="col-p1 m-3 bck-tab">
                <div class="table-responsive">
                    <form action="{{route('usuarios.guardar')}}" method="post">
                        @csrf
                        <select name="IDTIPOID" id="IDTIPOID" class="form-select my-3" aria-label="selecionar tipo de documento" >
                            <option>Seleccione tipo de documento</option>
                            <option value="C.C.">C.C.</option>
                            <option value="C.E.">C.E.</option>
                            <option value="P.P.">P.P.</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="IDENTIFICACIONUSU" name="IDENTIFICACIONUSU">
                            <label for="IDENTIFICACIONUSU">Identificacion</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="NOMBREUSU" name="NOMBREUSU" >
                            <label for="NOMBREUSU">Nombre y Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="CARGOUSU" name="CARGOUSU">
                            <label for="CARGOUSU">Cargo</label>
                        </div>
                        <select name="ROL" id="ROL" class="form-select my-3" aria-label="Seleccione Rol del Sistema">
                            <option>Seleccione Rol del Sistema</option>
                            <option value="ADMINISTRADOR.">Administrador</option>
                            <option value="TESORERO">Tesorero.</option>
                            <option value="CONTADOR">Contador</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="TELEFONOUSU" name="TELEFONOUSU">
                            <label for="TELEFONOUSU">Telefono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="CORREOUSU" name="CORREOUSU">
                            <label for="CORREOUSU">Correo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="CONTASEÑAUSU" name="CONTASEÑAUSU">
                            <label for="CONTASEÑAUSU">Contraseña</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar Aprendiz</button>
                        <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

