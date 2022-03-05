@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel Principal</h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Personal Activo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"><i class="fas fa-user-md"></i></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas información
                    <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <button class="btn btn-primary btn-lg"> Holas</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop