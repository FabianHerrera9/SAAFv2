@extends('layouts.admin.app')
@section('title')
    | Editar Usuario
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('usuarios.actualizar',$usuarios->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <select name="Tipoid" id="Tipoid" class="form-select my-3 form-control"
                                aria-label="selecionar tipo de documento">
                            <option value="{{$usuarios->Tipoid}}">{{$usuarios->Tipoid}}</option>
                            <option value=" ">Seleccione tipo de documento</option>
                            <option value="C.C.">C.C.</option>
                            <option value="C.E.">C.E.</option>
                            <option value="P.P.">P.P.</option>
                        </select>
                        @if($errors->has('Tipoid'))
                            <label for="" style="color:red;">{{ $errors->first('Tipoid') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Identificacion">Identificacion</label>
                        <input type="text" class="form-control" id="Identificacion" name="Identificacion"
                               value="{{$usuarios->Identificacion}}">
                        @if($errors->has('Identificacion'))
                            <label for="" style="color:red;">{{ $errors->first('Identificacion') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Nombre">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre"
                               value="{{$usuarios->Nombre}}">
                        @if($errors->has('Nombre'))
                            <label for="" style="color:red;">{{ $errors->first('Nombre') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Cargo">Cargo</label>
                        <input type="text" class="form-control" id="Cargo" name="Cargo"
                               placeholder="Rector/Tesorero/Secretari" value="{{$usuarios->Cargo}}">
                        @if($errors->has('Cargo'))
                            <label for="" style="color:red;">{{ $errors->first('Cargo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <select name="Rol" id="Rol" class="form-select my-3 form-control"
                                aria-label="Seleccione Rol del Sistema">
                            <option value="{{$usuarios->Rol}}">{{$usuarios->Rol}}</option>
                            <option value=" ">Seleccione Rol del Sistema</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Tesorero">Tesorero.</option>
                            <option value="Contador">Contador</option>
                        </select>
                        @if($errors->has('Rol'))
                            <label for="" style="color:red;">{{ $errors->first('Rol') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" id="Tel" name="Tel"
                               value="{{$usuarios->Tel}}">
                        @if($errors->has('Tel'))
                            <label for="" style="color:red;">{{ $errors->first('Tel') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="email" class="form-control" id="Email" name="Email"
                               value="{{$usuarios->Email}}">
                        @if($errors->has('Email'))
                            <label for="" style="color:red;">{{ $errors->first('Email') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Password">Contraseña</label>
                        <input type="password" class="form-control" id="Password" name="Password">
                        @if($errors->has('Password'))
                            <label for="" style="color:red;">{{ $errors->first('Password') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <select name="Estado" id="Estado" class="form-select my-3 form-control" aria-label="Seleccione Estado">
                            <option value="{{$usuarios->Estado}}">{{$usuarios->Estado}}</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                        @if($errors->has('Estado'))
                            <label for="" style="color:red;">{{ $errors->first('Estado') }}</label>
                            <br>
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar Usuario</button>
                    <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection


