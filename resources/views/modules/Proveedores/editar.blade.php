@extends('layouts.admin.app')
@section('title')
    | Editar Proveedor
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('proveedores.actualizar',$prov->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="my-3">
                        <label for="TipoId">Tipo Identificacion</label>
                        <select name="TipoId" id="TipoId" class="form-select  form-control"
                                aria-label="selecionar tipo de documento">
                            <option value="{{$prov->Tipoid}}">{{$prov->Tipoid}}</option>
                            <option>selecionar tipo de documento</option>
                            <option value="NIT">NIT</option>
                            <option value="CC">C.C.</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Provid">Identificacion Proveedor</label>
                        <input type="number" class="form-control" id="Provid" name="Provid" value="{{$prov->Provid}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvName">Nombre de Proveedor</label>
                        <input type="text" class="form-control" id="ProvName" name="ProvName"
                               value="{{$prov->ProvName}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" id="Tel" name="Tel" value="{{$prov->Tel}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" id="Email" name="Email" value="{{$prov->Email}}">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvDir">Direccion</label>
                        <input type="text" class="form-control" id="ProvDir" name="ProvDir" value="{{$prov->ProvDir}}">
                    </div>
                    <div>
                        <label for="ProvDir">Tipo de Proveedor</label>
                        <select name="Tipoprov" id="Tipoprov" class="form-select form-control"
                                aria-label="Seleccione Tipo de Proveedor">
                            <option value="{{$prov->Tipoprov}}">{{$prov->Tipoprov}}</option>
                            <option value="">Seleccione Tipo de Proveedor</option>
                            <option value="Tangibles">Tangibles</option>
                            <option value="Intangibles">Intangibles</option>
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar Proveedor</button>
                    <a type="button" class="btn" id="color-font" href="{{route('proveedores.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

