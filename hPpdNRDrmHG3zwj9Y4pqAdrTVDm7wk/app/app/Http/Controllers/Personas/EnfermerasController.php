<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Enfermeras;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;

class EnfermerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //leer todos los registros
    {
        
        $enf= Enfermeras::all();
        return view('enfermeras.index',compact('enf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //abrir formulario de nuevo registro
    {
        return view('enfermeras.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //guardar en la base de datos el nuevo registro
    {
        $producto = new Enfermeras;
    $producto->nombre     = $request->get('nombre');
    $producto->telefono     = $request->get('telefono');
    $producto->imagen   ='';
    $producto->tipo_imagen   ='';
    
    $producto->tipo_enfermera  = $request->get('tipo');
    $producto->direccion  = $request->get('direccion');
    $producto->CURP  = $request->get('curp');
    $producto->RFC = $request->get('rfc');
    $producto->disponibilidad  = $request->get('disponibilidad');
    $producto->nacimiento   =$request->get('nacimiento');;
    $producto->general   =$request->get('descrip');;
    $producto->save();
    return redirect()->route('enfermeras.servicios.index')->withSuccess('toastr.success("s");');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enfermeras $enfermeras)  //es para visualizar un solo registro a detalle
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //abrir un formulario para edición de un registro
    {
        $editable = Enfermeras::find($id);
        return view('enfermeras.editar',compact('editable'));

    }

    /**
     * Update the specified resource in storage.s
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Enfermeras::where('id', $id)->update($request->all());
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enfermeras $enfermeras) //para eliminar un registro
    {
        //
    }

    public function enfermeras_image(){
        return 'https://picsum.photos/300/300';
    }

    
}
