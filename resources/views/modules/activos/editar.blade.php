@extends('layouts.admin.app')
@section('title')
    | Editar Activo
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('activos.actualizar',$activo->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="TipoActivo">Tipo Activo</label>
                        <select name="TipoActivo" id="TipoActivo" class="form-select my-3 form-control"
                                aria-label="Seleccione el tipo Activo">
                            <option value="{{$activo->TipoActivo}}">{{$activo->TipoActivo}}</option>
                            <option value=" " >Seleccione el tipo Activo</option>
                            <option value="Tangible">Tangible</option>
                            <option value="Intangible">Intangible</option>
                        </select>
                        @if($errors->has('TipoActivo'))
                            <label for="" style="color:red;">{{ $errors->first('TipoActivo') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="NombreActivo">Nombre de Activo</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="NombreActivo" name="NombreActivo"
                               value="{{$activo->NombreActivo}}">
                        @if($errors->has('NombreActivo'))
                            <label for="" style="color:red;">{{ $errors->first('NombreActivo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="SN">SERIAL</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="SN" name="SN"
                               value="{{$activo->SN}}">
                        @if($errors->has('SN'))
                            <label for="" style="color:red;">{{ $errors->first('SN') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Marca">Marca</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Marca" name="Marca"
                               value="{{$activo->Marca}}">
                        @if($errors->has('Marca'))
                            <label for="" style="color:red;">{{ $errors->first('Marca') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Modelo">Modelo / Version</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Modelo" name="Modelo"
                               value="{{$activo->Modelo}}">
                        @if($errors->has('Modelo'))
                            <label for="" style="color:red;">{{ $errors->first('Modelo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Garantia">Garantia</label>
                        <input type="date" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Garantia" name="Garantia"
                               value="{{$activo->Garantia}}">
                        @if($errors->has('Garantia'))
                            <label for="" style="color:red;">{{ $errors->first('Garantia') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Descripcion">Descripcion</label>
                        <textarea type="text" class="form-control"  id="Descripcion" name="Descripcion"
                                  value="{{$activo->Descripcion}}">{{$activo->Descripcion}}</textarea>
                        @if($errors->has('Descripcion'))
                            <label for="" style="color:red;">{{ $errors->first('Descripcion') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <select name="IdProveedor" id="IdProveedor" class="form-select my-3 form-control"
                                aria-label="Seleccione el proveedor">
                            @foreach($prov as $provs)
                                @if($activo->IdProveedor == $provs->id)
                                    <option value="{{$provs->id}}">{{$provs->ProvName}}</option>
                                @endif
                            @endforeach
                                <option value=" ">---------------------</option>
                            @foreach($prov as $provs)
                                <option value="{{$provs->id}}">{{$provs->ProvName}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdProveedor'))
                            <label for="" style="color:red;">{{ $errors->first('IdProveedor') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <select name="IdUsuario" id="IdUsuario" class="form-select my-3 form-control"
                                aria-label="Seleccione el Usuario que registra">
                            @foreach($usu as $usus)
                                @if($activo->IdUsuario == $usus->id)
                                    <option value="{{$usus->id}}">{{$usus->name}} | {{$usus->Cargo}}</option>
                                @endif
                            @endforeach
                                <option value=" ">---------------------</option>
                            @foreach($usu as $usus)
                                <option value="{{$usus->id}}">{{$usus->name}} | {{$usus->Cargo}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdUsuario'))
                            <label for="" style="color:red;">{{ $errors->first('IdUsuario') }}</label>
                            <br>
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar Activo</button>
                    <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection


