@extends('layouts.admin.app')
@section('title')
    | Detalles del Registro
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">

                <div class="form-floating mb-3">
                    <label for="Tipo">Tipo Registro</label>
                    <select name="Tipo" id="Tipo" class="form-select form-control"
                            aria-label="selecionar tipo de documento">
                        <option value="{{$mtto->Tipo}}">{{$mtto->Tipo}}/option>
                    </select>
                </div>
                <div class="form-floating mb-3">

                    <label for="IdActivo">Seleccione Activo</label>
                    <select name="IdActivo" id="IdActivo" class="form-select form-control"
                            aria-label="selecionar tipo de documento">
                        @foreach($activo as $activ)
                            @foreach($mtto as $mant)
                                @if($mant->IdActivo == $activ->id)
                                <option value="{{$mant->IdActivo}}">{{$activ->id}}|{{$activ->NombreActivo}}
                                    |{{$activ->TipoActivo}}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                </div>


                <div class="form-floating my-3">
                    <label for="Fecha">Fecha </label>
                    <input type="date" class="form-control" id="Fecha" name="Fecha" value="{{$mtto->Fecha}}">
                </div>

                <div class="form-floating mb-3">
                    <label for="Problema/Fallo">Problema/Fallo</label>
                    <textarea type="text" class="form-control" name="Problema/Fallo" id="Problema/Fallo"
                              value="{{$mtto->Problema/Fallo}}"></textarea>
                </div>
                <div class="form-floating mb-3">
                    <label for="ProveedorServ">Proveedor del Mantenimientio/Garantia</label>
                    <input type="text" class="form-control" id="ProveedorServ" name="ProveedorServ" value="{{$mtto->ProveedorServ}}">

                </div>
                <div class="form-floating mb-3">
                    <label for="Reparador">Nombre de Tecnico / Realizador del Trabajo</label>
                    <input type="text" class="form-control" id="Reparador" name="Reparador"
                           value="{{$mtto->Reparador}}">
                </div>

                <div class="form-floating mb-3">
                    <label for="TrabajoRealizado">Trabajo Realizado</label>
                    <textarea type="text" class="form-control" name="TrabajoRealizado" id="TrabajoRealizado"
                              >{{$mtto->TrabajoRealizado}}</textarea>
                </div>

                <div class="form-floating mb-3">
                    <label for="Solucion">Solicionado</label>
                    <select name="Solucion" id="Solucion" class="form-select form-control">
                        <option value="{{$mtto->Solucion}}">{{$mtto->Solucion}}</option>
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <label for="ActaServicio">Acta de Servicio</label>
                    <input type="file" class="form-control" id="ActaServicio" name="ActaServicio" value="{{$mtto->ActaServicio}}">
                </div>

                <hr>
                <a type="button" class="btn" id="color-font" href="{{route('Mttogarant.index')}}">Volver</a>


            </div>
        </div>
    </div>

@endsection

