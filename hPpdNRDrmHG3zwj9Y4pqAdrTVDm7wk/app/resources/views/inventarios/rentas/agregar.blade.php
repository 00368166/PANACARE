@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Agregar Producto consumible')

@section('content_header')

    <h1>Agregar producto</h1>
@stop

@section('content')

<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Producto Rentable</h3>

</div>


<form action="{{route('inventarios.rentas.store')}}" method="POST">

<div class="card-body">

<div class="form-group">
<label for="exampleInputEmail1">Codigo de Barras</label>
<input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ingresar codigo de barras    ">
</div>


<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre completo">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Enter ..."></textarea>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Precio</label>
<input type="tel" class="form-control" name="precio" id="precio" placeholder="Ej: 125">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Cantidad</label>
<input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresar cantidad">
</div>

<div class="form-group">
    <?php 
    $prov = DB::table('proveedor')->get();
    ?>
<label for="exampleInputEmail1">Proveedor</label>

<select class="form-control" name="proveedor">
@for ($i = 0; $i < $prov->count(); $i++)
<option value="{{$prov[$i]->id}}">{{$prov[$i]->nombre_empresa}}</option>
@endfor
                </select>

</div>

<div class="form-group">
<label for="exampleInputEmail1">Tipo de consumible</label>
<input type="text" class="form-control" name="tipo" id="tipo" placeholder="Ingresar tipo">
</div>


<div class="form-group">
<label for="exampleInputEmail1">Lote</label>
<input type="text" class="form-control" name="lote" id="lote" placeholder="Ingresar lote">
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