@extends('adminlte::page')

@section('title', 'Rentas lista')

@section('content_header')
    <h1>Rentas</h1>
@stop

@section('content')
<div class="card-header">

<a href ="{{route('inventarios.rentas.create')}}"  class="btn btn-block btn-primary btn-lg">

<i class="fas fa-pen"> Crear nuevo</i>

</a>
</div>

    <table id="rentas" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Codigo de Barras</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Lote</th>
                <th>Proveedor</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentas as $rentas)
            <tr>
                <td>{{$rentas->cod_barras}}</td>
                <td>{{$rentas->nombre}}</td>
                <td>{{$rentas->descripcion}}</td>
                <td>{{$rentas->percio}}</td>
                <td>{{$rentas->cantidad}}</td>
                <td>{{$rentas->lote}}</td>
                <td>{{$rentas->proveedor_id}}</td>
                
                <td> 
                <div class="row">
                    <div class="col-md-4">
                    <a href ="editrenta/{{$rentas->cod_barras}}"  class="btn btn-block btn-success btn-lg">
<i class="fas fa-pen"> Editar</i>
</a>
                    </div>
                    <div class="col-md-4">
                    <a href ="deleterenta/{{$rentas->cod_barras}}" class="btn btn-block btn-danger btn-lg">
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
    $('#rentas').DataTable();
} );
</script>
@stop