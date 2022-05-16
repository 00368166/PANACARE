@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar clientes')

@section('content_header')

<h1>Agregar clientes</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Agregar clientes</h3>

                </div>


                <form action="{{route('clientes.store')}}" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                placeholder="Ingresar nombre completo">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefono</label>
                            <input type="tel" class="form-control" name="telefono" id="telefono"
                                placeholder="Ej: 9511876322">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Direccion</label>
                            <textarea class="form-control" name="direccion" id="direccion" rows="3"
                                placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Relacion</label>
                            <select class="form-control" name="relacion" id="relacion">
                                <option value="Familiar">Familiar</option>
                                <option value="Conocido">Conocido</option>
                                <option value="Amistad">Amistad</option>
                                <option value="Pareja">Pareja</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">necesidad</label>
                            <textarea class="form-control" name="necesidad" id="necesidad" rows="3"
                                placeholder="Enter ..."></textarea>
                        </div>


                        <div class="form-group">
                            <label>Fecha de nacimiento del paciente</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="nacimiento" id="nacimiento" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
<script>
$(document).ready(function() {
    bsCustomFileInput.init()
});
</script>
@stop