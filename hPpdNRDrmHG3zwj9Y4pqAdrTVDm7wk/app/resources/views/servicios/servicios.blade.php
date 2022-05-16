@extends('adminlte::page')

@section('title', 'Personal lista')

@section('content_header')
    <h1>Estadisticas de servicios</h1>
@stop

@section('content')


<div class="container-fuid">
    <div class="row">
        <div class="col-md-6">


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Solicitudes del mes</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart">
<canvas id="servicios" width="150" height="150"></canvas>
</div>
</div>

</div>

</div>

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Solicitudes del año</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart">
<canvas id="personal" width="400" height="400"></canvas>
</div>
</div>

</div>
</div>

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Personal mas activo</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart">
<canvas id="personalactivo" width="400" height="400"></canvas>
</div>
</div>

</div>
</div>

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Historico de servicios</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart">
<canvas id="historico" width="400" height="400"></canvas>
</div>
</div>

</div>
</div>


    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>
const ctx = document.getElementById('servicios');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Geriatría', 'Pediatría', 'Post Parto', 'General', 'Oncología', 'Post Cirugía'],
        datasets: [{
            label: '# de solicitudes al mes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
    
<script>
const gts = document.getElementById('personal');
const newchart = new Chart(gts, {
    type: 'line',
    data: {
        labels: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        datasets: [{
            label: '# de solicitudes totales por mes en el año actual',
            data: [20,25,30,38,42,48,60,75,80,90,85,100],
            order: 1,
            backgroundColor: [
                'rgba(75, 192, 192, 0.1)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        },{
            label: '# de solicitudes el año pasado',
            data: [1,2,4,8,16,12,10,15,10,12,9,18],
            order: 2,
            backgroundColor: [
                'rgba(255, 99, 132, 0.1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>


<script>
const ddd = document.getElementById('personalactivo');
const personalchart = new Chart(ddd, {
    type: 'radar',
    data: {
        labels: ['Personal A','Personal B','Personal C','Personal D','Personal E'],
        datasets: [{
            label: '# Personal con más horas mes actual',
            data: [20,25,30,38,42],
            fill: true,
            backgroundColor: [
                'rgba(75, 192, 192, 0.1)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        },{
            label: '# Personal con más horas mes anterior',
            data: [15,20,22,26,18],
            fill: true,
            borderWidth: 1
        }]
    },
    
    
    options: {
    }
});
</script>

<script>
const rrr = document.getElementById('historico');
const historicoChart = new Chart(rrr, {
    type: 'bar',
    data: {
        labels: ['Geriatría', 'Pediatría', 'Post Parto', 'General', 'Oncología', 'Post Cirugía'],
        datasets: [{
            label: '# de solicitudes de todos los tiempos',
            data: [80, 120, 50, 60, 22, 15],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@stop