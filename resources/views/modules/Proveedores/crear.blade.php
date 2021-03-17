@extends('layouts.admin.app')
@section('title')
    | Crear Proveedor
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('proveedores.guardar')}}" method="post">
                    @csrf
                    <select name="Tipoid" id="Tipoid" class="form-select my-3 form-control"
                            aria-label="selecionar tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="NIT">NIT</option>
                        <option value="CC">C.C.</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Provid">Identificacion Proveedor</label>
                        <input type="number" class="form-control" id="Provid" name="Provid">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvName">Nombre de Proveedor</label>
                        <input type="text" class="form-control" id="ProvName" name="ProvName">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" id="Tel" name="Tel">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" id="Email" name="Email">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvDir">Direccion</label>
                        <input type="text" class="form-control" id="ProvDir" name="ProvDir">
                    </div>
                    <select name="Tipoprov" id="Tipoprov" class="form-select my-3 form-control"
                            aria-label="Seleccione Tipo de Proveedor">
                        <option value="">Seleccione Tipo de Proveedor</option>
                        <option value="Tangibles">Tangibles</option>
                        <option value="Intangibles">Intangibles</option>
                    </select>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Proveedor</button>
                    <a type="button" class="btn" id="color-font" href="{{route('proveedores.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

