@extends('layouts.admin.app')
@section('title')
    | Usuario
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">

                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name"> Nombre y Apellidos </label>
                            <input type="text" class="form-control" id="formrow-email-input" name="name"
                                   value="{{Auth::user()->name}}" disabled="disabled">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email"> Email </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="email"
                                           value="{{Auth::user()->email}}" disabled="disabled">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Estado"> Estado </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Estado"
                                           value="{{Auth::user()->Estado}}" disabled="disabled">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="Tipoid"> Tipo Identificación </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Identificacion"
                                           value="{{Auth::user()->Tipoid}}" disabled="disabled">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="Identificacion"> Identificación </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Identificacion"
                                           value="{{Auth::user()->Identificacion}}" disabled="disabled">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="Cargo"> Cargo </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Cargo"
                                           value="{{Auth::user()->Cargo}}" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="Tel"> Teléfono </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Tel"
                                           value="{{Auth::user()->Tel}}" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="Rol"> Rol </label>
                                    <input type="text" class="form-control" id="formrow-email-input" name="Rol"
                                           value="{{Auth::user()->Rol}}" disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <a type="button" class="btn" id="color-font" href="{{route('usuarios.index')}}">Volver</a>
            </div>
        </div>
    </div>

@endsection


