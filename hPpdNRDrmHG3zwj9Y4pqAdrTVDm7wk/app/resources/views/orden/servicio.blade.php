@extends('adminlte::page')

@section('title', 'Lista de Servicios')

@section('content_header')

<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>Orden de servicio</h1>
@stop
@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Generar orden de Servicio</h3>
    </div>
    <form method="POST">
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

            <h5>Custom Color Variants</h5>
            <div class="row">
                <div class="col-12 col-sm-6">

                    <div class="form-group">
                        <label>Minimal (.select2-danger)</label>
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>

                </div>
                <div class="col-12 col-sm-6">

                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <div class="select2-purple">
                            <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>

    <div class="card-footer">

    </div>
</div>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

@stop

@section('js')

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
                for (i=0; i<data.length; i++) {
                    $("#autocompleteList").append('<option value="' + data[i].nombre + '">'  + data[i].id + '</option>');
                }  
        },
        error: function(error) {
            console.log('cargando');
        }

    });


});
$(document).ready(function(){     
      $("#nombre").keypress(function(e) {
        if(e.which == 13) {
         
    var name = document.getElementById("nombre").value;

    $.ajax({
        type: "POST",
        url: '{{route('ordenservicio.encontrar')}}',
        data: {
            'name': name
        },
        success: function(data) {
            console.log(data);
            if(data.length!==0){
                document.getElementById("telefono").value=data[0].telefono;
            document.getElementById("direccion").value=data[0].direccion;
        
            }
            else{

                document.getElementById("telefono").value='';
            document.getElementById("direccion").value='';
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
        url: '{{route('ordenservicio.encontrar')}}',
        data: {
            'name': name
        },
        success: function(data) {
            if(data.length!==0){
                document.getElementById("telefono").value=data[0].telefono;
            document.getElementById("direccion").value=data[0].direccion;
        
            }
            else{

                document.getElementById("telefono").value='';
            document.getElementById("direccion").value='';
            }
        },
        error: function(error) {
            
            document.getElementById("telefono").value='';
            document.getElementById("direccion").value='';
        }

    });
});
</script>

<script>
console.log('Hi!');
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