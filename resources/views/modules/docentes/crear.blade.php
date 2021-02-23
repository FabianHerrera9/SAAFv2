@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row m-1">
            <div class="col-p1 m-3 bck-tab">
                <div class="table-responsive">
                    <form action="" method="post">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Identificacion" name="Identificacion">
                            <label for="Identificacion">Identificacion</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="NomDcocente" name="NomDocente" >
                            <label for="NomDcocente">Nombre y Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Telefono" name="Telefono">
                            <label for="Telefono">Numero telefonico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Email" name="Email">
                            <label for="Email">Telefono</label>
                        </div>
                        <select name="TipoId" id="TipoId" class="form-select my-3" aria-label="Seleccione el tipo de documento">
                            <option>Seleccione tipo de documento</option>
                            <option value="C.C">Cedula de ciudadania</option>
                            <option value="C.E">Cedula extranjera</option>
                            <option value="P.P">Pasaporte</option>
                        </select>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar Docente</button>
                        <a type="button" class="btn" id="color-font" href="">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



