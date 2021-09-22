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
                        @if($errors->has('Tipoid'))
                            <label for="" style="color:red;">{{ $errors->first('Tipoid') }}</label>
                            <br>
                        @endif
                    </select>
                    <div class="form-floating mb-3">
                        <label for="Provid">Identificacion Proveedor</label>
                        <input type="number" pattern="[A-Za-z0-9_-@]{1,15}" class="form-control" id="Provid" name="Provid">
                        @if($errors->has('Provid'))
                            <label for="" style="color:red;">{{ $errors->first('Provid') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvName">Nombre de Proveedor</label>
                        <input type="text" pattern="[A-Za-z0-9_-@]{1,15}" class="form-control" id="ProvName" name="ProvName">
                        @if($errors->has('ProvName'))
                            <label for="" style="color:red;">{{ $errors->first('ProvName') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Tel">Telefono</label>
                        <input type="number" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Tel" name="Tel">
                        @if($errors->has('Tel'))
                            <label for="" style="color:red;">{{ $errors->first('Tel') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Email" name="Email">
                        @if($errors->has('Email'))
                            <label for="" style="color:red;">{{ $errors->first('Email') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProvDir">Direccion</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="ProvDir" name="ProvDir">
                        @if($errors->has('ProvDir'))
                            <label for="" style="color:red;">{{ $errors->first('ProvDir') }}</label>
                            <br>
                        @endif
                    </div>
                    <select name="Tipoprov" id="Tipoprov" class="form-select my-3 form-control"
                            aria-label="Seleccione Tipo de Proveedor">
                        <option value="">Seleccione Tipo de Proveedor</option>
                        <option value="Tangibles">Tangibles</option>
                        <option value="Intangibles">Intangibles</option>
                        @if($errors->has('Tipoprov'))
                            <label for="" style="color:red;">{{ $errors->first('Tipoprov') }}</label>
                            <br>
                        @endif
                    </select>
                    <hr>
                    <button type="submit" class="btn btn-success">Agregar Proveedor</button>
                    <a type="button" class="btn" id="color-font" href="{{route('proveedores.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

