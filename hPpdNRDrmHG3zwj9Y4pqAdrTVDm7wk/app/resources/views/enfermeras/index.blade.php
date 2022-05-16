@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
<div class="card card-solid">
      <div class="card-body pb-0">
<div class="row">
@foreach($enf as $enfermeras)
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
            {{$enfermeras->tipo_enfermera}}
            </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                        <h2 class="lead"><b>{{$enfermeras->nombre}}</b></h2>
                        <p class="text-muted text-sm"><b>Acerca de: </b> {{$enfermeras->general}} </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> {{$enfermeras->direccion}}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> {{$enfermeras->telefono}}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-check"></i></span> {{$enfermeras->disponibilidad}}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user-nurse"></i></span> {{$enfermeras->nacimiento}}</li>
                            </ul>
                </div>
                <div class="col-5 text-center">
                    <img src="<?php echo app\Http\Controllers\Personas\EnfermerasController::enfermeras_image();?>" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="editenfermeras/{{$enfermeras->id}}" class="btn btn-sm bg-primary">
                    <i class="fas fa-pen"> Editar perfil</i>
                </a>
                <a href="deleteenfermera/{{$enfermeras->id}}" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"> Eliminar</i>
                </a>
                <a href="tel:{{$enfermeras->telefono}}" class="btn btn-sm bg-teal">
                    <i class="fas fa-phone"> Llamar</i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=521{{$enfermeras->telefono}}&text=Hola%20*{{$enfermeras->nombre}}*%2C%20nos%20permitimos%20contactarte%20por%20whatsapp%20para%20confirmar%20que%20aun%20cuentes%20con%20la%20siguiente%20disponibilidad%3A%20*{{$enfermeras->disponibilidad}}*%20por%20motivo%20de%20que%20tienes%20una%20oferta%20de%20servicio%20disponible%2C%20esperamos%20tu%20pronta%20respuesta." class="btn btn-sm bg-teal">
                    <i class="fas fa-comment"> Whatsapp</i>
                </a>
            </div>
        </div>
    </div>

</div>



@endforeach
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
@stop