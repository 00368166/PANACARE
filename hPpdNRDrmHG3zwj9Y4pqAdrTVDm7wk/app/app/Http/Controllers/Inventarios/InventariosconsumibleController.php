<?php

namespace App\Http\Controllers\Inventarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\_inventariosconsumibles;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class InventariosconsumibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $consumibles= _inventariosconsumibles::all();
        return view('inventarios.consumibles.index',compact('consumibles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarios.consumibles.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new _inventariosconsumibles;
    $producto->cod_barras  = $request->get('codigo');
    $producto->nombre     = $request->get('nombre');
    $producto->descripcion = $request->get('descripcion');
    $producto->percio  = $request->get('precio');
    $producto->cantidad  = $request->get('cantidad');
    $producto->proveedor_id  = $request->get('proveedor');
    $producto->tipo_consumible  = $request->get('tipo');
    $producto->caducidad  = $request->get('caducidad');
    $producto->imagen   ='';
    $producto->tipo_foto   ='';
    
    $producto->lote  = $request->get('lote');

    $producto->save();
    return redirect()->route('inventarios.consumibles.index')->withSuccess('toastr.success("s");');
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
    public function edit($cod)
    {   
        $editable = _inventariosconsumibles::where('cod_barras', $cod)->get()->first();
        return view('inventarios.consumibles.editar',compact('editable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $num)
    {   _inventariosconsumibles::where('cod_barras', $num)->update($request->all());
       // return $temp->all();
//        $temp->update($request->all());
 //       $num->save();
        return redirect()->route('inventarios.consumibles.index')->withSuccess('toastr.success("s");');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from _inventariosconsumibles where cod_barras = ?',[$id]);
        return redirect()->route('inventarios.consumibles.index')->withSuccess('toastr.success("s");');
    }
}
