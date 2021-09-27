@extends('layouts.admin.app')
@section('title')
    | Registrar Prestamo
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('prestamos.guardar')}}" method="post">
                    @csrf
                    <div>
                        <label for="Tipo">Tipo</label>
                        <select name="Tipo" id="Tipo" class="form-select my-1 form-control ">
                            <option value="" selected="selected">Seleccione...</option>
                            <option value="Prestamo">Prestamo</option>
                            <option value="Asignacion">Asignacion</option>
                        </select>
                        @if($errors->has('Tipo'))
                            <label for="" style="color:red;">{{ $errors->first('Tipo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="FechaPrestamo">Fecha inicio de Prestamo</label>
                        <input type="date" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="FechaPrestamo" name="FechaPrestamo">
                        @if($errors->has('FechaPrestamo'))
                            <label for="" style="color:red;">{{ $errors->first('FechaPrestamo') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="IdActivo">Activo</label>
                        <select name="IdActivo" id="IdActivo" class="form-select  form-control"
                                aria-label="Seleccione el Activo">
                            <option value=" ">Seleccione el Activo</option>
                            @foreach($activos as $activo)
                                <option value="{{$activo->id}}">{{$activo->NombreActivo}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdActivo'))
                            <label for="" style="color:red;">{{ $errors->first('IdActivo') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="IdAmbiente">Ambiente</label>
                        <select name="IdAmbiente" id="IdAmbiente" class="form-select form-control"
                                aria-label="Seleccione el Ambiente">
                            <option value="">Seleccione el Ambiente</option>
                            @foreach($ambiente as $ambientes)
                                <option value="{{$ambientes->id}}">{{ $ambientes -> NombreAMbiente }}
                                    | {{ $ambientes -> PisoAmbiente }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdAmbiente'))
                            <label for="" style="color:red;">{{ $errors->first('IdAmbiente') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="IdDocente">Doncete</label>
                        <select name="IdDocente" id="IdDocente" class="form-select form-control"
                                aria-label="Asignar A.....">
                            <option value=" ">Seleccione ....</option>
                            @foreach($docentes as $docente)
                                <option value="{{$docente->id}}">{{$docente->NomDocente}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdDocente'))
                            <label for="" style="color:red;">{{ $errors->first('IdDocente') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="IdUsuario">Usuario Que registra</label>
                        <select name="IdUsuario" id="IdUsuario" class="form-select form-control"
                                aria-label="Asignar Por.....">
                            <option value="">Seleccione ....</option>
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdUsuario'))
                            <label for="" style="color:red;">{{ $errors->first('IdUsuario') }}</label>
                            <br>
                        @endif
                    </div>
                    <div>
                        <label for="Estado">Estado</label>
                        <select name="Estado" id="Estado" class="form-select my-1 form-control "
                                aria-label="Seleccione Estado" >
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                        @if($errors->has('Estado'))
                            <label for="" style="color:red;">{{ $errors->first('Estado') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating my-3">
                        <label for="FechaDevolucion">Fecha Fin de Prestamo</label>
                        <input type="date" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="FechaDevolucion" name="FechaDevolucion">
                        @if($errors->has('FechaDevolucion'))
                            <label for="" style="color:red;">{{ $errors->first('FechaDevolucion') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="Observaciones">Observaciones</label>
                        <textarea type="text" class="form-control" id="Observaciones" name="Observaciones"
                                  placeholder="Observaciones"></textarea>
                        @if($errors->has('Observaciones'))
                            <label for="" style="color:red;">{{ $errors->first('Observaciones') }}</label>
                            <br>
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Registrar Prestamo</button>
                    <a type="button" class="btn" id="color-font" href="{{route('prestamos.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



