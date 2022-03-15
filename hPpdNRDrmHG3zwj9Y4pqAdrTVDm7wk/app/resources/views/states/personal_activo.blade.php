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
Personal Asignado
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
</div>
</div>
<small>
57% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
</div>
</div>
<small>
47% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
</div>
</div>
<small>
77% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
</div>
</div>
<small>
60% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
 </li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
</div>
</div>
<small>
12% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
</div>
</div>
<small>
35% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
</div>
</div>
<small>
87% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
 <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
</div>
</div>
<small>
77% Complete
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
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
<li class="list-inline-item">
<img alt="Avatar" class="table-avatar" src="<?php echo app\Http\Controllers\StatesController::state_image();?>">
</li>
</ul>
</td>
<td class="project_progress">
<div class="progress progress-sm">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
</div>
</div>
<small>
77% Complete
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