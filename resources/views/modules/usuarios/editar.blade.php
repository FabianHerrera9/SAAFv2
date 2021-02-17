@extends('layouts.admin.app')
@section('title')
    | Editar Usuario
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('usuarios.actualizar',$usuarios->IDENTIFICACIONUSU)}}" method="post">
                    @csrf
                    @method('PUT')
                    <select name="IDTIPOID" id="IDTIPOID" class="form-select my-3 form-control"
                            aria-label="selecionar tipo de documento">
                        <option value="{{$usuarios->IDTIPOID}}">{{$usuarios->IDTIPOID}}</option>
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">P.P.</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="IDENTIFICACIONUSU">{{$usuarios->IDENTIFICACIONUSU}}</label>
                        <input type="text" class="form-control" id="IDENTIFICACIONUSU" name="IDENTIFICACIONUSU"
                               value="{{$usuarios->IDENTIFICACIONUSU}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NOMBREUSU">{{$usuarios->NOMBREUSU}}</label>
                        <input type="text" class="form-control" id="NOMBREUSU" name="NOMBREUSU"
                               value="{{$usuarios->NOMBREUSU}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="CARGOUSU">{{$usuarios->CARGOUSU}}</label>
                        <input type="text" class="form-control" id="CARGOUSU" name="CARGOUSU"
                               placeholder="Rector/Tesorero/Secretari" value="{{$usuarios->CARGOUSU}}">
                    </div>
                    <select name="ROL" id="ROL" class="form-select my-3 form-control"
                            aria-label="Seleccione Rol del Sistema">
                        <option value="{{$usuarios->ROL}}">{{$usuarios->ROL}}</option>
                        <option>Seleccione Rol del Sistema</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Tesorero">Tesorero.</option>
                        <option value="Contador">Contador</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="TELEFONOUSU">{{$usuarios->TELEFONOUSU}}</label>
                        <input type="number" class="form-control" id="TELEFONOUSU" name="TELEFONOUSU"
                               value="{{$usuarios->TELEFONOUSU}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="CORREOUSU">{{$usuarios->CORREOUSU}}</label>
                        <input type="email" class="form-control" id="CORREOUSU" name="CORREOUSU"
                               value="{{$usuarios->CORREOUSU}}">
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


