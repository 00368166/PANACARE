@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar Servicios')

@section('content_header')

    <h1>Agregar Servicios</h1>
@stop

@section('content')
<form action="{{route('listaservicios.store')}}" method="POST">
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Agregar servicio</h3>
</div>
<div class="card-body">


<div class="form-group">
<label for="exampleInputPassword1">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre del servicio">
</div>



<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Enter ..."></textarea>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Precio</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input type="text" class="form-control" name="precio" id="precio">
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
@csrf
</form>


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