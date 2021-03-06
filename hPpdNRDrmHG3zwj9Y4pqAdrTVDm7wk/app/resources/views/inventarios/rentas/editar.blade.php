@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
@section('title', 'Editar inventarios')

@section('content_header')

    <h1>Editar <?php echo $editable->cod_barras?></h1>
@stop

@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Producto rentas</h3>

</div>


<form action="{{route('inventarios.rentas.update',$editable->cod_barras)}}" method="PATCH">

<div class="card-body">

<div class="form-group">
<label for="exampleInputEmail1">Codigo de Barras</label>
<input type="text" class="form-control" name="cod_barras" id="cod_barras" value="<?php echo $editable->cod_barras?>" disabled = "disabled">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $editable->nombre?>">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Descripción</label>
<textarea class="form-control" name="descripcion" id="descripcion" rows="3"><?php echo $editable->descripcion?></textarea>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Precio</label>
<input type="tel" class="form-control" name="percio" id="percio" value="<?php echo $editable->percio?>">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Cantidad</label>
<input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo $editable->cantidad?>">
</div>

<div class="form-group">
<?php 
    $prov = DB::table('proveedor')->get();
    ?>
<label for="exampleInputEmail1">Proveedor</label>

<select class="form-control" name="proveedor_id">
@for ($i = 0; $i < $prov->count(); $i++)
<option value="{{$prov[$i]->id}}">{{$prov[$i]->nombre_empresa}}</option>
@endfor
                </select>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Tipo de consumible</label>
<input type="text" class="form-control" name="tipo_consumible" id="tipo_consumible" value="<?php echo $editable->tipo_consumible?>">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Lote</label>
<input type="text" class="form-control" name="lote" id="lote" value="<?php echo $editable->lote?>">
</div>

</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

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