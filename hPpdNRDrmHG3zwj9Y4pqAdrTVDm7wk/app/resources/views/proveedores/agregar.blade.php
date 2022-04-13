@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar Producto consumible')

@section('content_header')

    <h1>Agregar Proveedor</h1>
@stop

@section('content')

<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Proveedor</h3>

</div>


<form action="{{route('proveedores.store')}}" method="POST">

<div class="card-body">



<div class="form-group">
<label for="exampleInputPassword1">Nombre</label>
<input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" placeholder="Ingresar nombre completo">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Giro de la empresa</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre completo">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Enter ..."></textarea>
</div>


<div class="form-group">
<label for="exampleInputEmail1">Direccion</label>
<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresar nombre completo">
</div>


<div class="form-group">
<label for="exampleInputPassword1">Telefono</label>
<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ej: 125">
</div>

<div class="form-group">
<label for="exampleInputFile">Imagen</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" name="imagen" id="imagen">
<label class="custom-file-label" for="exampleInputFile">Cargar imagen</label>
</div>
</div>
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