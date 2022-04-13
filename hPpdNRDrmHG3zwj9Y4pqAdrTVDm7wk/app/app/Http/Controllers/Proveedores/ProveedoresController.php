<?php

namespace App\Http\Controllers\Proveedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\proveedor;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $prov= proveedor::all();
        return view('proveedores.index',compact('prov'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new proveedor;
    $producto->nombre     = $request->get('nombre');
    $producto->nombre_empresa     = $request->get('nombre_empresa');
    
    $producto->direccion  = $request->get('direccion');
    $producto->descripcion = $request->get('descripcion');
    $producto->telefono  = $request->get('telefono');
    $producto->imagen   ='';
    $producto->tipo_foto   ='';
    $producto->save();
    return redirect()->route('proveedores.index')->withSuccess('toastr.success("s");');
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
        $editable = proveedor::find($id);
        return view('proveedores.editar',compact('editable'));
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
        proveedor::where('id', $id)->update($request->all());
       // return $temp->all();
//        $temp->update($request->all());
 //       $num->save();
        return redirect()->route('proveedores.index')->withSuccess('toastr.success("s");');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from proveedor where id = ?',[$id]);
        return redirect()->route('proveedores.index')->withSuccess('toastr.success("s");');
    }
    public function servicios_image(){
        return 'https://picsum.photos/300/300';
    }
}
