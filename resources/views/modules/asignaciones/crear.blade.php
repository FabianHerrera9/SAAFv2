@extends('layouts.admin.app')
@section('title')
    | Registrar Nueva Asignación
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('asignaciones.guardar')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="Fecha">Fecha de Asignacion</label>
                        <input type="date" class="form-control" id="Fecha" name="Fecha">
                        @if($errors->has('Fecha'))
                            <label for="" style="color:red;">{{ $errors->first('Fecha') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="IdActivo">Activo</label>
                        <select name="IdActivo" id="IdActivo" class="form-select form-control"
                                aria-label="Seleccione el Activo">
                            <option value="">Seleccione el Activo</option>
                            @foreach($activo as $activos)
                                <option value="{{$activos->id}}">{{$activos->NombreActivo}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdActivo'))
                            <label for="" style="color:red;">{{ $errors->first('IdActivo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="IdDocente">Docente</label>
                        <select name="IdDocente" id="IdDocente" class="form-select form-control"
                                aria-label="Seleccione el Docente">
                            <option value="">Seleccione el Docente</option>
                            @foreach($docente as $docentes)
                                <option value="{{$docentes->id}}">{{$docentes->NomDocente}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdDocente'))
                            <label for="" style="color:red;">{{ $errors->first('IdDocente') }}</label>
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
                        <label for="Estado">Estado</label>
                        <select name="Estado" id="Estado" class="form-select form-control"
                                aria-label="Seleccione el Estado">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                        @if($errors->has('Estado'))
                            <label for="" style="color:red;">{{ $errors->first('Estado') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="IdUsuario">Registra</label>
                        <select name="IdUsuario" id="IdUsuario" class="form-select form-control"
                                aria-label="Usuario que registra">
                            <option value="">Usuario que registra</option>
                            @foreach($usuario as $usuarios)
                                <option value="{{$usuarios->id}}">{{ $usuarios -> Nombre }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdUsuario'))
                            <label for="" style="color:red;">{{ $errors->first('IdUsuario') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Observaciones">Observaciones</label>
                        <textarea type="text" class="form-control" id="Observaciones" name="Observaciones"
                                  placeholder="Detalles fisicos/funcionales "></textarea>
                        @if($errors->has('Observaciones'))
                            <label for="" style="color:red;">{{ $errors->first('Observaciones') }}</label>
                            <br>
                        @endif
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Registrar Asignacion</button>
                    <a type="button" class="btn" id="color-font" href="{{route('ambientes.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection

