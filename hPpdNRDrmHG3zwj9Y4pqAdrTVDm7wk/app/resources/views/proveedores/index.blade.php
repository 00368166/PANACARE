@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Estadisticas de servicios</h1>
@stop

@section('content')

<div class="card card-solid">
      <div class="card-body pb-0">
<div class="row">
@for ($i = 1; $i <=6; $i++)
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                $Tipo de proveedor
            </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                        <h2 class="lead"><b>$Nombre del Proveedor</b></h2>
                        <p class="text-muted text-sm"><b>Acerca de: </b> $Descripcion </p>
                        
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Direccion: $direccion</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono: $telefono</li>
                            </ul>
                </div>
                <div class="col-5 text-center">
                    <img src="<?php echo app\Http\Controllers\Proveedores\ProveedoresController::servicios_image();?>" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="#" class="btn btn-sm bg-primary">
                    <i class="fas fa-pen"> Editar</i>
                </a>
                <a href="#" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"> Eliminar</i>
                </a>
            </div>
        </div>
    </div>

</div>



@endfor


</div>
    </div>
    <div class="card-footer">
<button class="btn btn-primary btn-lg"> Nuevo</button>
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