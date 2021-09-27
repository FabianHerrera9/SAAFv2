@extends('layouts.admin.app')
@section('title')
    | Registrar Mtto / Garantia
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('Mttogarant.guardar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="Tipo">Tipo Registro</label>
                        <select name="Tipo" id="Tipo" class="form-select form-control"
                                aria-label="selecionar tipo de documento">
                            <option value=" ">Seleccione ...</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Garantia">Garantia</option>
                        </select>
                        @if($errors->has('Tipo'))
                            <label for="" style="color:red;">{{ $errors->first('Tipo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">

                        <label for="IdActivo">Seleccione Activo</label>
                        <select name="IdActivo" id="IdActivo" class="form-select form-control"
                                aria-label="selecionar tipo de documento">
                            <option value=" ">Seleccione ...</option>
                            @foreach($activo as $activ)
                                <option value="{{$activ->id}}">{{$activ->id}}|{{$activ->NombreActivo}}
                                    |{{$activ->TipoActivo}}</option>
                            @endforeach
                        </select>

                        @if($errors->has('Tipo'))
                            <label for="" style="color:red;">{{ $errors->first('Tipo') }}</label>
                            <br>
                        @endif
                    </div>


                    <div class="form-floating my-3">
                        <label for="Fecha">Fecha </label>
                        <input type="date" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Fecha" name="Fecha">
                        @if($errors->has('Fecha'))
                            <label for="" style="color:red;">{{ $errors->first('Fecha') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="ProblemaFallo">Problema/Fallo</label>
                        <textarea type="text" class="form-control" name="ProblemaFallo" id="ProblemaFallo"
                                  placeholder="Descripcion del Problema/Fallo"></textarea>
                        @if($errors->has('ProblemaFallo'))
                            <label for="" style="color:red;">{{ $errors->first('ProblemaFallo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProveedorServ">Proveedor del Mantenimientio/Garantia</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="ProveedorServ" name="ProveedorServ">
                        @if($errors->has('ProveedorServ'))
                            <label for="" style="color:red;">{{ $errors->first('ProveedorServ') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Reparador">Nombre de Tecnico / Realizador del Trabajo</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Reparador" name="Reparador"
                               placeholder="Nombre de la persona que atiende el servicio">
                        @if($errors->has('Reparador'))
                            <label for="" style="color:red;">{{ $errors->first('Reparador') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="TrabajoRealizado">Trabajo Realizado</label>
                        <textarea type="text" class="form-control" name="TrabajoRealizado" id="TrabajoRealizado"
                        placeholder="Descripcion del trabajo realizado"></textarea>
                        @if($errors->has('TrabajoRealizado'))
                            <label for="" style="color:red;">{{ $errors->first('TrabajoRealizado') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Solucion">Solicionado</label>
                        <select name="Solucion" id="Solucion" class="form-select form-control">
                            <option value=" ">Seleccione ...</option>
                            <option value="Solucionado">Si</option>
                            <option value="No-Solucionado">No</option>
                        </select>
                        @if($errors->has('Solucion'))
                            <label for="" style="color:red;">{{ $errors->first('Solucion') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="ActaServicio">Acta de Servicio</label>
                        <input type="file" class="form-control" id="ActaServicio" name="ActaServicio">
                        @if($errors->has('ActaServicio'))
                            <label for="" style="color:red;">{{ $errors->first('ActaServicio') }}</label>
                            <br>
                        @endif
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <a type="button" class="btn" id="color-font" href="{{route('Mttogarant.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

