@extends('layouts.admin.app')
@section('title')
    | Hoja de Vida Activo
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">

                <div class="col-lg-6">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4">
                            <img class="card-img img-fluid" src="#" alt="alt">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <label for="TipoActivo">Tipo Activo</label>
                                    <input type="text" class="form-control" id="SN" name="SN"
                                           value={{$activo->TipoActivo}} disabled="disabled">
                                    
                                <div class="form-floating mb-3">
                                    <label for="NombreActivo">Nombre de Activo</label>
                                    <input type="text" class="form-control" id="SN" name="SN"
                                           value="{{$activo->NombreActivo}}" disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="SN">Marca</label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="SN"
                                           value="{{$activo->Marca}}" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="SN">Modelo / Version</label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="SN"
                                           value="{{$activo->Modelo}}" disabled="disabled">
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <label for="Descripcion">Descripcion</label>
                            <textarea disabled="disabled" type="text" class="form-control" id="Descripcion" name="Descripcion"
                                      value="{{$activo->Descripcion}}">{{$activo->Descripcion}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="SN">S/N</label>
                                    <input type="text" class="form-control" id="formrow-inputCity" name="SN"
                                           value="{{$activo->SN}}" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="SN">Garantia</label>
                                    <input type="text" class="form-control" id="formrow-inputCity" name="SN"
                                           value="{{$activo->Garantia}}" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="IdUsuario">Registra</label>
                                    @foreach($usuario as $usus)
                                        @if($activo->IdUsuario == $usus->id)
                                            <input type="text" class="form-control" id="formrow-inputCity" name="IdUsuario"
                                                   value="{{$usus->Nombre}} | {{$usus->Cargo}}" disabled="disabled">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="IdProveedor">Proveedor</label>
                            @foreach($prov as $provs)
                                @if($activo->IdProveedor == $provs->id)
                                    <input type="text" class="form-control" id="formrow-firstname-input" name="IdProveedor"
                                           value="{{$provs->ProvName}}" disabled="disabled">
                                @endif
                            @endforeach
                        </div>



                    </form>
                </div>
            <hr>
            <a type="button" class="btn" id="color-font" href="{{route('activos.index')}}">Cancelar</a>
            </div>
        </div>
    </div>

@endsection


