@extends('layouts.admin.app')
@section('title')
    | Registrar Ambiente
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('ambientes.guardar')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="PisoAmbiente">Piso del Ambiente/Salon</label>
                        <input type="text" class="form-control" id="PisoAmbiente" name="PisoAmbiente">
                        @if($errors->has('PisoAmbiente'))
                            <label for="" style="color:red;">{{ $errors->first('PisoAmbiente') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NombreAMbiente">Nombre asignado al Ambiente/Salon</label>
                        <input type="text" class="form-control" id="NombreAMbiente" name="NombreAMbiente">
                        @if($errors->has('NombreAMbiente'))
                            <label for="" style="color:red;">{{ $errors->first('NombreAMbiente') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Responsable">Cargo</label>
                        <input type="text" class="form-control" id="Responsable" name="Responsable"
                               placeholder="Opcional, Ej:'Lic. Fabian Herrera'">
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-success">Regisrar Ambiente</button>
                    <a type="button" class="btn" id="color-font" href="{{route('ambientes.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection

