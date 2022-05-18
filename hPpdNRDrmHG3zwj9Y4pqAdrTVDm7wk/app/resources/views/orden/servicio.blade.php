@extends('adminlte::page')

@section('title', 'Lista de Servicios')

@section('content_header')

<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>Orden de servicio</h1>
@stop
@section('content')

<div class="card card-info">
    <div class="card-body">
        <div class="row">

            <label>Datos del Cliente</label>
            <div class="col-md-6">

                <div class="form-group">
                    <label>Nombre
                        <a href="{{route('clientes.create')}}"><i class="fas fa-plus"></i></a>
                    </label>

                    <input list="autocompleteList" type="text" class="form-control" name="nombre" id="nombre">
                    <datalist id="autocompleteList"></datalist>

                </div>



            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Telefono</label>

                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder=""
                        disabled="disabled">
                </div>
            </div>

            <div class="form-group">
                <label>Direccion</label>
                <textarea class="form-control" name="direccion" id="direccion" rows="3" placeholder=""
                    disabled="disabled"></textarea>
            </div>



        </div>

        <h5>Servicio</h5>
        <div class="row">
            <form method="POST">
                <div class="card-body">
                    <div class="row">

                        <label>Busqueda de servicio</label>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre del servicio
                                    <a href="{{route('listaservicios.create')}}"><i class="fas fa-plus"></i></a>
                                </label>

                                <input list="autoservicio" type="text" class="form-control" name="nombreservicio" id="nombreservicio">
                                <datalist id="autoservicio"></datalist>

                            </div>



                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="precio" id="precio">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
<label>Dia inicio jornada:</label>
<div class="input-group date" id="reservationdate" data-target-input="nearest">
<input type="date" name="diainicial" id="diainicial" class="form-control datetimepicker-input" data-target="#reservationdate" />
<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>
              </div>

              <div class="col-md-6">
                        
                        <label>Hora de inicio jornada:</label>
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="time" name="iniciojornada" id="iniciojornada" class="form-control datetimepicker-input" data-target="#timepicker" />
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                        
                                      </div>
                                      <div class="col-md-6">
                        <div class="form-group">
<label>Dia final jornada:</label>
<div class="input-group date" id="reservationdate" data-target-input="nearest">
<input type="date" name="diafinal" id="diafinal" class="form-control datetimepicker-input" data-target="#reservationdate" />
<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>
              </div>

              <div class="col-md-6">
                        
                        <label>Hora final de jornada:</label>
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="time" name="finjornada" id="finjornada" class="form-control datetimepicker-input" data-target="#timepicker" />
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                        
                                      </div>

                    </div>
                </div>
                <div class="row">
                    </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-success" id="agregar" style="display: none;"><i class="fas fa-plus">agregar</i></button>
                </div>
        </div>
        <h5>Orden completa</h5>
        
        <button type="submit" class="btn btn-danger" id="cancelarorden" style="display: none;><i class="fas fa-ban"> Cancelar</i></button>
        
        <button type="submit" class="btn btn-success" id="terminarorden" style="display: none;><i class="fas fa-check"> Completar</i></button>
        <div class="row">
            
<table id="preview" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre servicio</th>
                <th>Dia</th>
                <th>Inicio jornada</th>
                <th>Dia Final</th>
                <th>Final jornada</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <div id="toajax"></div>
            </tr>
        </tbody>
        <tfoot>
            <tr>
            <th>Nombre servicio</th>
                <th>Dia</th>
                <th>Inicio jornada</th>
                <th>Dia Final</th>
                <th>Final jornada</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
    </table>
    
    </div>


        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

        @stop

        @section('js')

        <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <script>
        //Initialize Select2 Elements

        $('#nombre').keyup(function(e) {
            e.preventDefault();
            var cl = $(this).val();

            console.log(cl);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
        url: '{{route('ordenservicio.buscar')}}',
                data: {
                    'name': cl
                },
                success: function(data) {
                    $("#autocompleteList").empty();
                    for (i = 0; i < data.length; i++) {
                        $("#autocompleteList").append('<option value="' + data[i].nombre + '">' +
                            data[i]
                            .id + '</option>');
                    }
                },
                error: function(error) {
                    console.log('cargando');
                }

            });


        });
        $(document).ready(function() {
            $("#nombre").keypress(function(e) {
                if (e.which == 13) {

                    var name = document.getElementById("nombre").value;

                    $.ajax({
                        type: "POST",
        url: '{{route('ordenservicio.buscar')}}',
                        data: {
                            'name': name
                        },
                        success: function(data) {
                            console.log(data);
                            if (data.length !== 0) {
                                document.getElementById("telefono").value = data[0]
                                .telefono;
                                document.getElementById("direccion").value = data[0]
                                    .direccion;

                            } else {

                                document.getElementById("telefono").value = '';
                                document.getElementById("direccion").value = '';
                            }
                        },
                        error: function(error) {
                            console.log('cargando');

                        }

                    });

                }
            });
        });

        $('#nombre').click(function(e) {
            var name = document.getElementById("nombre").value;
            console.log('enviado');
            $.ajax({
                type: "POST",
        url: '{{route('ordenservicio.buscar')}}',
                data: {
                    'name': name
                },
                success: function(data) {
                    if (data.length !== 0) {
                        document.getElementById("telefono").value = data[0].telefono;
                        document.getElementById("direccion").value = data[0].direccion;

                    } else {

                        document.getElementById("telefono").value = '';
                        document.getElementById("direccion").value = '';
                    }
                },
                error: function(error) {

                    document.getElementById("telefono").value = '';
                    document.getElementById("direccion").value = '';
                }

            });
        });
        </script>

<script>
        //Initialize Select2 Elements

        $('#nombreservicio').keyup(function(e) {
            e.preventDefault();
            var cl = $(this).val();

            console.log(cl);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
        url: '{{route('ordenservicio.buscarservicio')}}',
                data: {
                    'name': cl
                },
                success: function(data) {
                    
                    console.log(data);
                    $("#autoservicio").empty();
                    for (i = 0; i < data.length; i++) {
                        $("#autoservicio").append('<option value="' + data[i].nombre + '">' +
                            data[i]
                            .id + '</option>');
                    }
                },
                error: function(error) {
                    console.log('cargando');
                }

            });


        });
        $(document).ready(function() {
            $("#nombreservicio").keypress(function(e) {
                if (e.which == 13) {

                    var name = document.getElementById("nombreservicio").value;
                    $.ajax({
                type: "POST",
        url: '{{route('ordenservicio.buscarservicio')}}',
                data: {
                    'name': name
                },
                success: function(data) {
                            console.log(data);
                            if (data.length !== 0) {    
                                document.getElementById("precio").value = data[0].precio;

                            } else {

                                document.getElementById("precio").value = '';
                            }
                        },
                        error: function(error) {
                            console.log('cargando');

                        }

                    });

                }
            });
        });

        $('#nombreservicio').click(function(e) {
            var name = document.getElementById("nombreservicio").value;
            console.log('enviado');
            $.ajax({
                type: "POST",
        url: '{{route('ordenservicio.buscarservicio')}}',
                data: {
                    'name': name
                },
                success: function(data) {
                    if (data.length !== 0) {
                                document.getElementById("precio").value = data[0].precio;

                            } else {

                                document.getElementById("precio").value = '';
                            }
                },
                error: function(error) {
                }

            });
        });
        $('#finjornada').click(function(e) {
            checkcampos();
        });
        function  checkcampos(){
            var name = document.getElementById('nombreservicio').value;
            var precio = document.getElementById('precio').value;
            var ini = document.getElementById('diainicial').value;
            var fin = document.getElementById('diafinal').value;
            
            var ini2 = document.getElementById('iniciojornada').value;
            var fin2 = document.getElementById('finjornada').value;

            if(name.length !== 0 && precio.length !== 0 && ini.length !== 0 && ini2.length !== 0 && fin2.length !== 0){

                console.log('check');
            $('#agregar').slideDown();
            }
        };
        </script>
        
        <script>

$('#agregar').click(function(e) {
            var cliente = document.getElementById('nombre').value;
            var service = document.getElementById('nombreservicio').value;
            var ini = document.getElementById('diainicial').value;
            var fin = document.getElementById('diafinal').value;
            var ini2 = document.getElementById('iniciojornada').value;
            var fin2 = document.getElementById('finjornada').value;

            console.log('enviando temp');
            $.ajax({
                type: "PATCH",
        url: '{{route('ordenservicio.tempservicio')}}',
                data: {
                    'cliente': cliente,
                    'servicio': service,
                    'diaini': ini,
                    'horaini': ini2,
                    'diafin': fin,
                    'horafin': fin2,
                    'token': ""
                },
                success: function(data) {
                    if (data.length !== 0) {
                                console.log(data);
                            } else {

                                console.log('Cargando!');
                            }
                },
                error: function(error) {
                }

            });
        });
        </script>
        
        <script>
        console.log('Hi!');
        </script>

<script>
        console.log('{{ csrf_token() }}');
        </script>

        <script>
        $(document).ready(function() {
            $('#servicios').DataTable();
        });
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

        @if(!empty($successMessage = \Illuminate\Support\Facades\Session::get('Done')))
        <script>
        $(function() {
            @if($successMessage)
            console.log('Hi! alert');
            @endif
        });
        </script>
        @endif
        @stop