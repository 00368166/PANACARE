<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ordenservicio;
use App\Models\detalleservicio;

use App\Models\clientes;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class ordenservicioController extends Controller
{
    public function index()
    {
        return view('orden.servicio');
    }
    public function buscar(Request $request)
    {
    $id = $request->get('name');
    if($id){

    $data = DB::table('clientes')
        ->select('clientes.*')   
        ->where('nombre', 'like', '%' . $id . '%')
        ->get();
//    $list = DB::select('select * from clientes where nombre like ', '%'.$id.'%');
    //clientes::where('name', 'like', '%'.$id.'%');
   
    return  $data;
    
}

    /*
        if($request->ajax())
{
    return "True request!"; 
}*/
    }
    public function encontrar(Request $request)
    {
    $id = $request->get('name');
    if($id){

    $data = DB::table('clientes')
        ->select('clientes.*')   
        ->where('nombre', '=', $id)
        ->get();
        return $data; 
}
    /*
        if($request->ajax())
{
    return "True request!"; 
}*/
    }

    public function buscarservicio(Request $request)
    {
    $id = $request->get('name');
    if($id){

    $data = DB::table('servicios')
        ->select('servicios.*')   
        ->where('nombre', 'like', '%' . $id . '%')
        ->get();
//    $list = DB::select('select * from clientes where nombre like ', '%'.$id.'%');
    //clientes::where('name', 'like', '%'.$id.'%');
   
    return  $data;
    
}

    /*
        if($request->ajax())
{
    return "True request!"; 
}*/
    }

    public function encontrarservicio(Request $request)
    {
    $id = $request->get('name');
    if($id){

    $data = DB::table('servicios')
        ->select('servicios.*')   
        ->where('nombre', '=', $id)
        ->get();
        return $data; 
}
    /*
        if($request->ajax())
{
    return "True request!"; 
}*/
    }

    public function tempservicio(Request $request)
    {
        
        return $request; 
    $id = $request->get('name');
    if($id){

    $data = DB::table('servicios')
        ->select('servicios.*')   
        ->where('nombre', '=', $id)
        ->get();
}
    /*
        if($request->ajax())
{
    return "True request!"; 
}*/
    }



}
