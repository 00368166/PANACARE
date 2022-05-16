<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientes;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enf= clientes::all();
        return view('clientes.index',compact('enf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new clientes;
        $producto->nombre     = $request->get('nombre');
        $producto->telefono = $request->get('telefono');
        $producto->direccion  = $request->get('direccion');
        $producto->relacion  = $request->get('relacion');
        $producto->nacimiento  = $request->get('nacimiento');
        $producto->necesidad  = $request->get('necesidad');
    
        $producto->save();
        return redirect()->route('clientes.index')->withSuccess('toastr.success("s");');
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
        $editable = clientes::where('id', $id)->get()->first();
        return view('clientes.editar',compact('editable'));
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
        clientes::where('id', $id)->update($request->all());
       // return $temp->all();
//        $temp->update($request->all());
 //       $num->save();
        return redirect()->route('clientes.index')->withSuccess('toastr.success("s");');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from clientes where id = ?',[$id]);
        return redirect()->route('clientes.index')->withSuccess('toastr.success("s");');
    }

    public function enfermeras_image(){
        return 'https://picsum.photos/300/300';
    }
}
