@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel Principal</h1>
@stop

@section('content')

<?php

$mensajes = DB::table('message')->count();
?>

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
            <div class="col-lg-3 col-6">
                <div class="small-box bg-Warning">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Personal Disponible</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"><i class="fas fa-user"></i></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas información
                    <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>
            
            <div class="col-lg-3 col-6">
                <div class="small-box bg-Success">
                    <div class="inner">
                        <h3>14</h3>
                        <p>Rentas Activas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"><i class="fas fa-dolly"></i></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas información
                    <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $mensajes?></h3>
                        <p>Mensajes pendientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"><i class="fas fa-envelope"></i></i>
                    </div>
                    <a href="#" class="small-box-footer">Mas información
                    <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>


<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Servicios Activos de la semana</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">820</span>
<span>Totales de todo el tiempo</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 12.5%
</span>
<span class="text-muted">respecto a semana anterior</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="services_chart" height="200"></canvas>
</div>
</div>
</div>

<div class="card">
<div class="card-header border-0">
<h3 class="card-title">Products</h3>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-sm">
<i class="fas fa-download"></i>
</a>
<a href="#" class="btn btn-tool btn-sm">
<i class="fas fa-bars"></i>
</a>
</div>
</div>
<div class="card-body table-responsive p-0">
<table class="table table-striped table-valign-middle">
<thead>
<tr>
<th>Product</th>
<th>Price</th>
<th>Sales</th>
<th>More</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<img src="https://picsum.photos/300/300" alt="Product 1" class="img-circle img-size-32 mr-2">
Some Product
</td>
<td>$13 MXN</td>
<td>
<small class="text-success mr-1">
<i class="fas fa-arrow-up"></i>
12%
</small>
12,000 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://picsum.photos/300/300" alt="Product 1" class="img-circle img-size-32 mr-2">
Another Product
</td>
<td>$29 MXN</td>
<td>
<small class="text-warning mr-1">
<i class="fas fa-arrow-down"></i>
0.5%
</small>
123,234 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://picsum.photos/300/300" alt="Product 1" class="img-circle img-size-32 mr-2">
Amazing Product
</td>
<td>$1,230 MXN</td>
<td>
<small class="text-danger mr-1">
<i class="fas fa-arrow-down"></i>
3%
</small>
198 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://picsum.photos/300/300" alt="Product 1" class="img-circle img-size-32 mr-2">
Perfect Item
<span class="badge bg-danger">NEW</span>
</td>
<td>$199 MXN</td>
<td>
<small class="text-success mr-1">
<i class="fas fa-arrow-up"></i>
63%
</small>
87 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>

<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Ingresos</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">$80,000</span>
<span>Sales Over Time</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 75.1%
</span>
<span class="text-muted">Comparado al año pasado</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="finance" height="200"></canvas>
</div>
</div>
</div>

<div class="card">
<div class="card-header border-0">
<h3 class="card-title">Online Store Overview</h3>
<div class="card-tools">
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-download"></i>
</a>
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-bars"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="d-flex justify-content-between align-items-center border-bottom mb-3">
<p class="text-success text-xl">
<i class="ion ion-ios-refresh-empty"></i>
</p>
<p class="d-flex flex-column text-right">
 <span class="font-weight-bold">
<i class="ion ion-android-arrow-up text-success"></i> 12%
</span>
<span class="text-muted">CONVERSION RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center border-bottom mb-3">
<p class="text-warning text-xl">
<i class="ion ion-ios-cart-outline"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-up text-warning"></i> 0.8%
</span>
<span class="text-muted">SALES RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center mb-0">
<p class="text-danger text-xl">
<i class="ion ion-ios-people-outline"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-down text-danger"></i> 1%
</span>
<span class="text-muted">REGISTRATION RATE</span>
</p>
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
    <script>

    </script>
    <script>
const ctx = document.getElementById('services_chart');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Geriatría', 'Pediatría', 'Post Parto', 'General', 'Oncología', 'Post Cirugía'],
        datasets: [{
            label: '# de solicitudes al mes',
            data: [30, 25, 9, 2, 18, 12],
            backgroundColor: [
                'rgba(255, 99, 132, 0.1)',
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
            borderWidth: 1,
            order: 1
        },
        {
            label: '# de solicitudes al mes pasado',
            data: [8,12,3,9,2,4],
            backgroundColor: [
                'rgba(153, 102, 255, 0.1)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            order: 2
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
const aa = document.getElementById('finance');
const dd = new Chart(aa, {
    type: 'line',
    data: {
        labels: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        datasets: [{
            label: '$ al año',
            data: [1500,2000,2555,4500,6150,18952,24322,15000,19000,3000,15000,18663],
            backgroundColor: [
                'rgba(6, 500, 150, 0.1)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(6, 500, 150, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            order: 1
        },
        {
            label: '$ al año pasado',
            data: [0,0,0,0,1500,2000,2403,2600,6000,3500,1500,1666],
            backgroundColor: [
                'rgba(153, 102, 255, 0.1)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            order: 2
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