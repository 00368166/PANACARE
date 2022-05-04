@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('content_top_nav_right')
<?php

$mensajes = DB::table('message')->count();
$correos = 0;
$pagos = 0;
$count = 0 + $mensajes ;
?>
    <li class="nav-item dropdown">
       
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" >
          <i class="fas fa-bell"></i>
          @if($count>0)
          <span class="badge badge-warning navbar-badge"><?php echo $count?></span>
          @endif
        </a>
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <span class="dropdown-item dropdown-header"><?php echo $count?> Notificaciones</span>
          @if($mensajes > 0)
          <div class="dropdown-divider"></div>
          <a href="mensajes" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> <?php echo $mensajes?> nuevos mensajes
            <span class="float-right text-muted text-sm"></span>
          </a>
            @endif
            @if($correos > 0)
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> <?php echo $correos?> correos pendientes
            <span class="float-right text-muted text-sm"></span>
          </a>
          @endif
          @if($pagos > 0)
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> <?php echo $pagos?>pagos pendientes
            <span class="float-right text-muted text-sm">Hoy</span>
          </a>
          @endif
        </div>
    </li>
@endsection

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
.
