@extends('layouts.admin.app')
@section('title')
    | Editar Ambiente
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('ambientes.actualizar',$Ambiente->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <label for="PisoAmbiente">Piso del Ambiente/Salon</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="PisoAmbiente" name="PisoAmbiente"
                        value="{{$Ambiente->PisoAmbiente}}">
                        @if($errors->has('PisoAmbiente'))
                            <label for="" style="color:red;">{{ $errors->first('PisoAmbiente') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="NombreAMbiente">Nombre asignado al Ambiente/Salon</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="NombreAMbiente" name="NombreAMbiente"
                        value="{{$Ambiente->NombreAMbiente}}">
                        @if($errors->has('NombreAMbiente'))
                            <label for="" style="color:red;">{{ $errors->first('NombreAMbiente') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Responsable">Cargo</label>
                        <input type="text" class="form-control" pattern="[A-Za-z0-9_-@]{1,15}" id="Responsable" name="Responsable"
                               placeholder="Opcional, Ej:'Lic. Fabian Herrera'" value="{{$Ambiente->Responsable}}">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar Ambiente / Salon</button>
                    <a type="button" class="btn" id="color-font" href="{{route('ambientes.index')}}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>

@endsection


