@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Consumibles</h1>
@stop

@section('content')
<div class="card-header">

<a href ="{{route('inventarios.consumibles.create')}}"  class="btn btn-block btn-primary btn-lg">

<i class="fas fa-pen"> Crear nuevo</i>

</a>
</div>

    <table id="consumibles" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Codigo de Barras</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Lote</th>
                <th>Caducidad</th>
                <th>Proveedor</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consumibles as $producto)
            <tr>
                <td>{{$producto->cod_barras}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->percio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->lote}}</td>
                <td>{{$producto->caducidad}}</td>
                <td>{{$producto->proveedor_id}}</td>
                
                <td> 
                <div class="row">
                    <div class="col-md-4">
                    <a href ="editconsumible/{{$producto->cod_barras}}"  class="btn btn-block btn-success btn-lg">
<i class="fas fa-pen"> Editar</i>
</a>
                    </div>
                    <div class="col-md-4">
                    <a href ="deleteconsumible/{{$producto->cod_barras}}" class="btn btn-block btn-danger btn-lg">
<i class="fas fa-pen"> Eliminar</i>
</a>
                    </div>
                
                </div>    
                </td>
            </tr>
            
            @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>Codigo de Barras</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Lote</th>
                <th>Caducidad</th>
                <th>Proveedor</th>  
                <th>Opciones</th>
            </tr>
        </tfoot>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
    <script>
    $(document).ready(function() {
    $('#consumibles').DataTable();
} );
</script>
@stop