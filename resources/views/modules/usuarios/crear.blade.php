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
                    <select name="Tipoid" id="Tipoid" class="form-select my-3 form-control"
                            aria-label="selecionar tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">P.P.</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Identificacion">Identificacion</label>
                        <input type="text" class="form-control" id="Identificacion" name="Identificacion">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Name">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="Name" name="Name">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Job">Cargo</label>
                        <input type="text" class="form-control" id="Job" name="Job"
                               placeholder="Rector/ra|Tesorer@|Secretari@">
                    </div>
                    <select name="Rol" id="Rol" class="form-select my-3 form-control" aria-label="Seleccione Rol del Sistema">
                        <option>Seleccione Rol del Sistema</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Tesorero">Tesorero</option>
                        <option value="Contador ">Contador</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" id="Tel" name="Tel">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="email" class="form-control" id="Email" name="Email"
                               placeholder="Ejemplo@saaf.com">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Password">Contraseña</label>
                        <input type="text" class="form-control" id="Password" name="Password">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                    <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

