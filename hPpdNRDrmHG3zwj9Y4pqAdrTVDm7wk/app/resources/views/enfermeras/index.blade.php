@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')

<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
    <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                $Tipo
            </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                        <h2 class="lead"><b>$nombre completo</b></h2>
                        <p class="text-muted text-sm"><b>Acerca de: </b> $Descripcion </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Direccion: $direccion</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono: $telefono</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-check"></i></span> Disponibilidad: $Disponibilidad</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user-nurse"></i></span> Edad: $Edad</li>
                            </ul>
                </div>
                <div class="col-5 text-center">
                    <img src="<?php echo app\Http\Controllers\Personas\EnfermerasController::enfermeras_image();?>" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="#" class="btn btn-sm bg-primary">
                    <i class="fas fa-pen"> Editar perfil</i>
                </a>
                <a href="#" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"> Eliminar</i>
                </a>
                <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-phone"> Llamar</i>
                </a>
                <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comment"> Whatsapp</i>
                </a>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop