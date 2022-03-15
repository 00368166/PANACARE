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
<span class="bg-red">10 Feb. 2022</span>
</div>


<div>
<i class="fas fa-envelope-open-text bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">What is Lorem Ipsum?</a> te envio un mensaje</h3>
<div class="timeline-body">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
<span class="bg-red">3 Jan. 2020</span>
</div>


<div>
<i class="fas fa-envelope-open-text bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Why do we use it?</a> te envio un mensaje</h3>
<div class="timeline-body">
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
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