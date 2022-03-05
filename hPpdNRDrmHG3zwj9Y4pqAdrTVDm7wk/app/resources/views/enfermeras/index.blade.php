@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
<div class="class card body-solid">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">asdasdsa</div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>Test</b></h2>
                                <p class="text-muted text-sm"><b>Acerca de:</b>Contendio descriptivo </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-building"></i>
                                            "Texto prueba"
                                        </span>
                                    </li>
                                </ul>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <i class="fas fa-lg fa-phone"></i>
                                            "Texto prueba"
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center"></div>
                        </div>
                    </div>
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