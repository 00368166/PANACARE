<?php

namespace App\Http\Controllers\Inventarios;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\_inventariosrentas;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class InventariosRentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $rentas= _inventariosrentas::all();
        return view('inventarios.rentas.index',compact('rentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarios.rentas.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new _inventariosRentas;
        $producto->cod_barras  = $request->get('codigo');
        $producto->nombre     = $request->get('nombre');
        $producto->descripcion = $request->get('descripcion');
        $producto->percio  = $request->get('precio');
        $producto->cantidad  = $request->get('cantidad');
        $producto->proveedor_id  = $request->get('proveedor');
        $producto->tipo_consumible  = $request->get('tipo');
        $producto->imagen   ='';
        $producto->tipo_foto   ='';
        
        $producto->lote  = $request->get('lote');
    
        $producto->save();
        return redirect()->route('inventarios.rentas.index')->withSuccess('toastr.success("s");');
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
        $editable = _inventariosRentas::where('cod_barras', $id)->get()->first();
        return view('inventarios.rentas.editar',compact('editable'));
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
        _inventariosRentas::where('cod_barras', $id)->update($request->all());
        // return $temp->all();
 //        $temp->update($request->all());
  //       $num->save();
         return redirect()->route('inventarios.rentas.index')->withSuccess('toastr.success("s");');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::delete('delete from _inventariosrentas where cod_barras = ?',[$id]);
        return redirect()->route('inventarios.rentas.index')->withSuccess('toastr.success("s");');
    }
}
