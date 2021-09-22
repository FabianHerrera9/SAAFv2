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
                        @if($errors->has('Tipoid'))
                            <label for="" style="color:red;">{{ $errors->first('Tipoid') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Provid">Identificacion Proveedor</label>
                        <input type="number" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Provid" name="Provid" value="{{$prov->Provid}}">
                        @if($errors->has('Provid'))
                            <label for="" style="color:red;">{{ $errors->first('Provid') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvName">Nombre de Proveedor</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="ProvName" name="ProvName"
                               value="{{$prov->ProvName}}">
                        @if($errors->has('ProvName'))
                            <label for="" style="color:red;">{{ $errors->first('ProvName') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Tel" name="Tel" value="{{$prov->Tel}}">
                        @if($errors->has('Tel'))
                            <label for="" style="color:red;">{{ $errors->first('Tel') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Email" name="Email" value="{{$prov->Email}}">
                        @if($errors->has('Email'))
                            <label for="" style="color:red;">{{ $errors->first('Email') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvDir">Direccion</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="ProvDir" name="ProvDir" value="{{$prov->ProvDir}}">
                        @if($errors->has('ProvDir'))
                            <label for="" style="color:red;">{{ $errors->first('ProvDir') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <label for="Tipoprov">Tipo de Proveedor</label>
                        <select name="Tipoprov" id="Tipoprov" class="form-select form-control"
                                aria-label="Seleccione Tipo de Proveedor">
                            <option value="{{$prov->Tipoprov}}">{{$prov->Tipoprov}}</option>
                            <option value="">Seleccione Tipo de Proveedor</option>
                            <option value="Tangibles">Tangibles</option>
                            <option value="Intangibles">Intangibles</option>
                            @if($errors->has('Tipoprov'))
                                <label for="" style="color:red;">{{ $errors->first('Tipoprov') }}</label>
                                <br>
                            @endif
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

