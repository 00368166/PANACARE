@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Projects</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body p-0">
<table class="table table-striped projects">
<thead>
<tr>
<th style="width: 1%">
#
</th>
<th style="width: 20%">
Servicio
</th>
<th style="width: 30%">
Equipo en renta
</th>
<th>
Periodo solicitado
</th>
<th style="width: 8%" class="text-center">
Estado del pago
</th>
<th style="width: 20%">
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
 <ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
 <i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
 </li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
 <i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
 <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
</tr>
<tr>
<td>
#
</td>
<td>
<a>
Cliente #
</a>
<br />
<small>
Iniciado 01.01.2019
</small>
</td>
<td>
<ul class="list-inline">
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::equipo_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
</div>
</div>
<small>
100% Complete
</small>
</td>
<td class="project-state">
<span class="badge badge-success">Success</span>
</td>
<td class="project-actions text-right">
<a class="btn btn-primary btn-sm" href="#">
<i class="fas fa-folder">
</i>
Ver archivo
</a>
<a class="btn btn-info btn-sm" href="#">
<i class="fas fa-pencil-alt">
</i>
Editar periodo
</a>
<a class="btn btn-danger btn-sm" href="#">
<i class="fas fa-trash">
</i>
Delete
</a>
</td>
 </tr>
</tbody>
</table>
</div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop

@section('js')
@stop