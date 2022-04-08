@extends('adminlte::page')

@section('title', 'Calendario')

@section('content_header')
    <h1>Calendario de Personal</h1>
@stop

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="sticky-top mb-3">
<div class="card">
<div class="card-header">
<h4 class="card-title">Agregar eventos</h4>
</div>
<div class="card-body">

<div id="external-events">
<div class="external-event bg-success">Lorem Ipsum</div>
<div class="external-event bg-warning">Lorem Ipsum</div>
<div class="external-event bg-info">Lorem Ipsum</div>
<div class="external-event bg-primary">Lorem Ipsum</div>
<div class="external-event bg-danger">Lorem Ipsum</div>
<div class="checkbox">
<label for="drop-remove">
<input type="checkbox" id="drop-remove">
remover despues de agregar
</label>
</div>
</div>
</div>

</div>

<div class="card">
<div class="card-header">
<h3 class="card-title">Crear evento</h3>
</div>
<div class="card-body">
<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
<ul class="fc-color-picker" id="color-chooser">
<li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
</ul>
</div>

<div class="input-group">
<input id="new-event" type="text" class="form-control" placeholder="Event Title">
<div class="input-group-append">
<button id="add-new-event" type="button" class="btn btn-primary">Add</button>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="col-md-9">
<div class="card card-primary">
<div class="card-body p-0">

<div id="calendar"></div>
</div>

</div>

</div>

</div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop

@section('js')
    
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendario');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
@stop