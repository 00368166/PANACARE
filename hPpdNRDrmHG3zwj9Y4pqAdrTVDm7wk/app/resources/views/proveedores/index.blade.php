@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')

<div class="card card-solid">
      <div class="card-body pb-0">
<div class="row">
@foreach ($prov as $prov)
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                {{$prov->nombre}}
            </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                        <h2 class="lead"><b>{{$prov->nombre_empresa}}</b></h2>
                        <p class="text-muted text-sm"><b>Acerca de: </b> {{$prov->descripcion}} </p>
                        
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Direccion: {{$prov->direccion}}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono: {{$prov->telefono}}</li>
                            </ul>
                </div>
                <div class="col-5 text-center">
                    <img src="<?php echo app\Http\Controllers\Proveedores\ProveedoresController::servicios_image();?>" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="editproveedores/{{$prov->id}}" class="btn btn-sm bg-primary">
                    <i class="fas fa-pen"> Editar</i>
                </a>
                <a href="deleteproveedores/{{$prov->id}}" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"> Eliminar</i>
                </a>
            </div>
        </div>
    </div>

</div>



@endforeach


</div>
    </div>
    <div class="card-footer">
    <a href ="{{route('proveedores.create')}}"  class="btn btn-block btn-primary btn-lg">

<i class="fas fa-pen"> Crear nuevo</i>

</a>
</div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop