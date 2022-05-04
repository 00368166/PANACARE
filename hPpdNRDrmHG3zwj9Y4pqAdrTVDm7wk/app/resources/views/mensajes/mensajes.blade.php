@extends('adminlte::page')
@section('title', 'Mensajes')

@section('content_header')
    <h1>Mensajes Recibidos</h1>
@stop

@section('content')
<?php

$mensajes = DB::table('message')->get();
$telefono = 'a';
?>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div class="timeline">

@for ($i = $mensajes->count()-1; $i >= 0; $i--)

<div class="time-label">
<span class="bg-red"><?php echo $mensajes[$i]->date; ?></span>
</div>


<div>

<i class="fas fa-envelope-open-text bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> <?php echo $mensajes[$i]->time; ?></span>
<h3 class="timeline-header"><a href="#"><?php echo $mensajes[$i]->nombre; ?></a> te envio un mensaje</h3>
<div class="timeline-body">
<?php echo $mensajes[$i]->text; ?>
</div>
<div  class="timeline-footer">
        <a href = 'deletemensaje/{{ $mensajes[$i]->id }}' class="btn btn-danger btn-sm">
<i class="fas fa-trash"> Eliminar</i>
</a>

<a href="https://api.whatsapp.com/send?phone=521<?=$mensajes[$i]->telefono;?>&text=Hola%20*<?=$mensajes[$i]->nombre;?>*%20es%20un%20gusto%20saludarte%20nos%20ponemos%20en%20contacto%20contigo%20por%20que%20nos%20dejaste%20un%20mensaje%20en%20nuestra%20pagina%20web%2C%20por%20el%20motivo%20de%20*<?=$mensajes[$i]->text;?>*,%20con%20gusto%20te%20atenderemos%20😄%20recuerda%20que%20para%20nosotros%20*La%20salud%20en%20tu%20mirada%20es%20nuestra%20inspiración*" class="btn bg-teal btn-sm">
<i class="fas fa-phone"> Whatsapp</i>
</a>
</div>
</div>
</div>


@endfor

<div>
<i class="fas fa-clock bg-gray"></i>
</div>
</div>
</div>

</div>
</div>
    

@stop

@if(!empty($successMessage = \Illuminate\Support\Facades\Session::get('Done')))
    <script>
        $(function () {
            @if($successMessage)
            console.log('Hi! alert');
            @endif
        });
    </script>
@endif

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
@stop
@section('js')
    <script> console.log('Hi!'); </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stop