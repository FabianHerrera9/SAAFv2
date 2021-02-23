@extends('layouts.admin.app')
@section('title')
    | Crear Activo
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('activos.guardar')}}" method="post">
                    @csrf
                    <select name="TipoActivo" id="TipoActivo" class="form-select my-3 form-control"
                            aria-label="Seleccione el tipo Activo">
                        <option>Seleccione el tipo Activo</option>
                        <option value="Tangible">Tangible</option>
                        <option value="Intangible">Intangible</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="NombreActivo">Nombre de Activo</label>
                        <input type="text" class="form-control" id="NombreActivo" name="NombreActivo">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="SN">SERIAL</label>
                        <input type="text" class="form-control" id="SN" name="SN">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Marca">Marca</label>
                        <input type="text" class="form-control" id="Marca" name="Marca">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Modelo">Modelo / Version</label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Garantia">Garantia</label>
                        <input type="date" class="form-control" id="Garantia" name="Garantia">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Descripcion">Descripcion</label>
                        <textarea type="text" class="form-control" id="Descripcion" name="Descripcion"></textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="IdProveedor" id="IdProveedor" class="form-select my-3 form-control"
                                aria-label="Seleccione el proveedor">
                            @foreach($prov as $provs)
                                <option value="">Seleccione Proveedor del Activo</option>
                                <option value="{{$provs->id}}">{{$provs->ProvName}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-floating mb-3">
                            <select name="IdUsuario" id="IdUsuario" class="form-select my-3 form-control"
                                    aria-label="Seleccione el Usuario que registra">
                                @foreach($usuario as $usu)
                                <option value="">Seleccione el Usuario que registra</option>
                                <option value="{{$usu->id}}">{{$usu->Name}} | {{$usu->Job}}</option>
                                @endforeach
                            </select>
                        </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Registrar Docente</button>
                    <a type="button" class="btn" id="color-font" href="{{route('activos.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



