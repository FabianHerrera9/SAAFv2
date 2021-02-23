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
                    <select name="TipoId" id="TipoId" class="form-select my-3 form-control"
                            aria-label="Seleccione el tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="C.C.">C.C.</option>
                        <option value="C.E.">C.E.</option>
                        <option value="P.P.">Pasaporte</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="NombreActivo">Identificacion</label>
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
                        <label for="Modelo">Modelo</label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Garantia">Garantia</label>
                        <input type="date" class="form-control" id="Garantia" name="Garantia">
                    </div>
                    <select name="TipoActivo" id="TipoActivo" class="form-select my-3 form-control"
                            aria-label="Seleccione el tipo de documento">
                        <option>Seleccione tipo de documento</option>
                        <option value="Tangible">Tangible</option>
                        <option value="Intangible">Intangible</option>
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Descripcion">Descripcion</label>
                        <textarea type="text" class="form-control" id="Descripcion" name="Descripcion"></textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="IdProveedor" id="IdProveedor" class="form-select my-3 form-control"
                                aria-label="Seleccione el proveedor">
                            @foreach($prov as $provs)
                                <option value="{{$provs->id}}">{{$provs->ProvName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="IdUsuario" id="IdUsuario" class="form-select my-3 form-control"
                                aria-label="Seleccione el Usuario que registra">
                            @foreach($usuario as $usu)
                                <option value="{{$usuario->id}}">{{$usuario->Name}} | {{$usuario->Job}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Docente</button>
                    <a type="button" class="btn" id="color-font" href="{{route('activos.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



