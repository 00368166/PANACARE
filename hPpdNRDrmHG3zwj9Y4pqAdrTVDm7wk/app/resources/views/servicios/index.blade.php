@extends('adminlte::page')

@section('title', 'Lista de Servicios')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
<div class="card-header">

<a href ="{{route('listaservicios.create')}}"  class="btn btn-block btn-primary btn-lg">

<i class="fas fa-pen"> Crear nuevo</i>

</a>
</div>

    <table id="servicios" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($editable as $servicios)
            <tr>
                <td>{{$servicios->id}}</td>
                <td>{{$servicios->nombre}}</td>
                <td>{{$servicios->descripcion}}</td>
                <td>{{$servicios->precio}}</td>
                
                <td> 
                <div class="row">
                    <div class="col-md-4">
                    <a href ="editelistaservicios/{{$servicios->id}}"  class="btn btn-block btn-success btn-lg">
<i class="fas fa-pen"> Editar</i>
</a>
                    </div>
                    <div class="col-md-4">
                    <a href ="deletelistaservicios/{{$servicios->id}}" class="btn btn-block btn-danger btn-lg">
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
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
    <script>
    $(document).ready(function() {
    $('#servicios').DataTable();
} );
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if(!empty($successMessage = \Illuminate\Support\Facades\Session::get('Done')))
    <script>
        $(function () {
            @if($successMessage)
            console.log('Hi! alert');
            @endif
        });
    </script>
@endif
@stop