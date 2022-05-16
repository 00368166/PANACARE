<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicios;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;


class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editable= servicios::all();
        return view('servicios.index',compact('editable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new servicios;
    $producto->nombre     = $request->get('nombre');
    $producto->descripcion = $request->get('descripcion');
    $producto->precio  = $request->get('precio');
    $producto->save();
    return redirect()->route('listaservicios.index')->withSuccess('toastr.success("Servicio creado");');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editable = servicios::where('id', $id)->get()->first();
        return view('servicios.editar',compact('editable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        servicios::where('id', $id)->update($request->all());
       // return $temp->all();
//        $temp->update($request->all());
 //       $num->save();
        return redirect()->route('listaservicios.index')->withSuccess('toastr.success("s");');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from servicios where id = ?',[$id]);
        return redirect()->route('listaservicios.index')->withSuccess('toastr.success("s");');
    }

    public function stats()
    {
        return view('servicios.servicios');
    }

    public function servicios_image(){
        return 'https://picsum.photos/300/300';
    }
}

