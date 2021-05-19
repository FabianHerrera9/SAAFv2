@extends('layouts.admin.app')
@section('title')
    | Registrar Mtto o Garantia
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('Mttogarant.guardar')}}" method="post">
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

                    <div class="form-floating my-3">
                        <label for="Fecha">Fecha </label>
                        <input type="date" class="form-control" id="Fecha" name="Fecha">
                        @if($errors->has('Fecha'))
                            <label for="" style="color:red;">{{ $errors->first('Fecha') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Problema/Fallo">Problema/Fallo</label>
                        <textarea name="Problema/Fallo" id="Problema/Fallo" cols="30" rows="10"
                        placeholder="Descripcion del Problema/Fallo">
                        </textarea>
                        @if($errors->has('Problema/Fallo'))
                            <label for="" style="color:red;">{{ $errors->first('Problema/Fallo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="ProveedorServ">Proveedor del Mantenimientio/Garantia</label>
                        <input type="text" class="form-control" id="ProveedorServ" name="ProveedorServ">
                        @if($errors->has('ProveedorServ'))
                            <label for="" style="color:red;">{{ $errors->first('ProveedorServ') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Reparador">Nombre de Tecnico/Realizador del Trabajo</label>
                        <input type="text" class="form-control" id="Reparador" name="Reparador">
                        @if($errors->has('Reparador'))
                            <label for="" style="color:red;">{{ $errors->first('Reparador') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="TrabajoRealizado">TrabajoRealizado</label>
                        <textarea name="TrabajoRealizado" id="TrabajoRealizado" cols="30" rows="10"
                                  placeholder="Descripcion del TrabajoRealizado">
                        </textarea>
                        @if($errors->has('TrabajoRealizado'))
                            <label for="" style="color:red;">{{ $errors->first('TrabajoRealizado') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Solucion">Rol</label>
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

