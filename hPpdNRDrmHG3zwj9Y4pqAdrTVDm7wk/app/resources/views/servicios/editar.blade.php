@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar Servicios')

@section('content_header')

    <h1>Editar Servicios</h1>
@stop

@section('content')
<form action="{{route('listaservicios.update',$editable->id)}}" method="PATCH">
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Editar {{$editable->nombre}}</h3>
</div>
<div class="card-body">


<div class="form-group">
<label for="exampleInputPassword1">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" value="{{$editable->nombre}}">
</div>



<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Enter ...">{{$editable->descripcion}}</textarea>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Precio</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input type="text" class="form-control" name="precio" id="precio" value="{{$editable->precio}}">
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
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