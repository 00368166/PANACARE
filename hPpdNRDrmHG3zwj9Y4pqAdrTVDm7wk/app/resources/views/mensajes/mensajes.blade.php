@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Mensajes Recibidos</h1>
@stop

@section('content')


<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div class="timeline">

<div class="time-label">
<span class="bg-red">10 Feb. 2014</span>
</div>


<div>
<i class="fas fa-envelope-open-text bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
<div class="timeline-body">
Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
weebly ning heekya handango imeem plugg dopplr jibjab, movity
jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
quora plaxo ideeli hulu weebly balihoo...
</div>
<div class="timeline-footer">
<a class="btn btn-danger btn-sm">
<i class="fas fa-trash"> Eliminar</i>
</a>
<a class="btn bg-teal btn-sm">
<i class="fas fa-phone"> Llamar</i>
</a>
</div>
</div>
</div>






<div class="time-label">
<span class="bg-red">3 Jan. 2014</span>
</div>


<div>
<i class="fas fa-envelope-open-text bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
<div class="timeline-body">
Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
weebly ning heekya handango imeem plugg dopplr jibjab, movity
jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
quora plaxo ideeli hulu weebly balihoo...
</div>
<div class="timeline-footer">
<a class="btn btn-danger btn-sm">
<i class="fas fa-trash"> Eliminar</i>
</a>
<a class="btn bg-teal btn-sm">
<i class="fas fa-phone"> Llamar</i>
</a>
</div>
</div>
</div>

<div>
<i class="fas fa-clock bg-gray"></i>
</div>
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