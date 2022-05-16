@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar Personal')

@section('content_header')

    <h1>Agregar personal</h1>
@stop

@section('content')

<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Agregar</h3>

</div>


<form action="{{route('enfermeras.servicios.store')}}" method="POST">
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre completo">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Tipo enfermera</label>
<input type="text" class="form-control" name="tipo" id="tipo" placeholder="Ingresar especialidad">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Telefono</label>
<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ej: 9511876322">
</div>


<div class="form-group">
<label for="exampleInputPassword1">Direccion</label>
<textarea class="form-control" name="direccion" id="direccion" rows="3" placeholder="Enter ..."></textarea>
</div>

<div class="form-group">
<label for="exampleInputEmail1">CURP</label>
<input type="text" class="form-control" name="curp" id="curp" placeholder="Ingresar CURP">
</div>

<div class="form-group">
<label for="exampleInputEmail1">RFC</label>
<input type="text" class="form-control" name="rfc" id="rfc" placeholder="Ingresar CURP">
</div>

<div class="form-group">
<label for="exampleInputFile">Imagen</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Cargar imagen</label>
</div>
</div>
</div>


<div class="form-group">
<label for="exampleInputPassword1">Disponibilidad</label>
<input type="text" class="form-control" name="disponibilidad" id="disponibilidad" placeholder="Dias y horarios disponibles para laborar">
</div>


<div class="form-group">
<label>Fecha de nacimiento</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
</div>
<input type="date" name="nacimiento" id="nacimiento"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
</div>
<!-- /.input group -->
</div>
<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descrip" id="descrip" rows="3" placeholder="Enter ..."></textarea>
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
    <script> console.log('Hi!'); </script>
    <script>
            $(document).ready(function() {
                bsCustomFileInput.init()
            });

        </script>
@stop