<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personas\EnfermerasController;

use App\Http\Controllers\Inventarios\InventariosconsumibleController;

use App\Http\Controllers\Inventarios\InventariosRentasController;

use App\Http\Controllers\Servicios\ServiciosController;

use App\Http\Controllers\Proveedores\ProveedoresController;

use App\Http\Controllers\StatesController;

use App\Http\Controllers\mensajesController;


use App\Http\Controllers\CalendarController;
//use App\Http\Controllers\Personas\EnfermerasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware('auth');

Route::get('/home', function () {
    return view('admin.admin');
})->middleware('auth');

Route::resource('mensajes',mensajesController::class)->names('mensajes')->middleware('auth');

Route::get('deletemensaje/{id}','App\Http\Controllers\mensajesController@destroy');

Route::get('inventarios/consumibles/create','App\Http\Controllers\Inventarios\InventariosconsumibleController@create');
Route::get('inventarios/deleteconsumible/{id}','App\Http\Controllers\Inventarios\InventariosconsumibleController@destroy');
Route::get('inventarios/editconsumible/{id}','App\Http\Controllers\Inventarios\InventariosconsumibleController@edit');

Route::get('inventarios/consumibles/{id}','App\Http\Controllers\Inventarios\InventariosconsumibleController@update');

Route::get('inventarios/rentas/create','App\Http\Controllers\Inventarios\InventariosRentasController@create');
Route::get('inventarios/deleterenta/{id}','App\Http\Controllers\Inventarios\InventariosRentasController@destroy');
Route::get('inventarios/editrenta/{id}','App\Http\Controllers\Inventarios\InventariosRentasController@edit');

Route::get('inventarios/rentas/{id}','App\Http\Controllers\Inventarios\InventariosRentasController@update');

Route::get('inventarios/consumibles/{id}','App\Http\Controllers\Inventarios\InventariosconsumibleController@update');

Route::get('proveedores/create','App\Http\Controllers\Proveedores\ProveedoresController@create');
Route::get('deleteproveedores/{id}','App\Http\Controllers\Proveedores\ProveedoresController@destroy');
Route::get('editproveedores/{id}','App\Http\Controllers\Proveedores\ProveedoresController@edit');

Route::get('proveedores/{id}','App\Http\Controllers\Proveedores\ProveedoresController@update');




Route::resource('mensajes',mensajesController::class)->names('mensajes')->middleware('auth');


Route::get('enfermeras/create','App\Http\Controllers\Personas\EnfermerasController@create');
Route::get('deleteenfermera/{id}','App\Http\Controllers\Personas\EnfermerasController@destroy');
Route::get('editenfermeras/{id}','App\Http\Controllers\Personas\EnfermerasController@edit');

Route::get('enfermeras/{id}','App\Http\Controllers\Personas\EnfermerasController@update');


Route::resource('enfermeras',EnfermerasController::class)->names('enfermeras.servicios')->middleware('auth');
Route::resource('inventarios/consumibles',InventariosconsumibleController::class)->names('inventarios.consumibles')->middleware('auth');
Route::resource('inventarios/rentas',InventariosRentasController::class)->names('inventarios.rentas')->middleware('auth');
Route::resource('servicios/enfermeras',ServiciosController::class)->names('servicios.enfermeras')->middleware('auth');

Route::get('servicios/servicios',[ServiciosController::class,'stats'])->name('servicios.enfermeras.stats')->middleware('auth');
Route::resource('proveedores',ProveedoresController::class)->names('proveedores')->middleware('auth');


Route::get('states/services/on',[StatesController::class,'personal_activo'])->name('states.enfermeras.on')->middleware('auth');
Route::get('states/services/off',[StatesController::class,'personal_finalizado'])->name('states.enfermeras.off')->middleware('auth');
Route::get('states/rentas/on',[StatesController::class,'renta_activa'])->name('states.rentas.on')->middleware('auth');
Route::get('states/rentas/off',[StatesController::class,'renta_finalizada'])->name('states.rentas.off')->middleware('auth');

Route::get('calendar/services',[CalendarController::class,'personal'])->name('calendar.personal')->middleware('auth');
Route::get('calendar/rent',[CalendarController::class,'rentas'])->name('calendar.rent')->middleware('auth');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('enfermeras', [HomeController::class,'index'] ) ->name('enfermeras.index');
//Route::resource('enfermeras', App\Http\Controllers\Personas\EnfermerasController::class)->names('enfermeras');

//Route::get('/enfermeras', [EnfermerasController::class, 'index'])->name('enfermeras.index');
//Route::get('enfermeras', [App\Http\Controllers\Personas\EnfermerasController::class, 'index'])->name('home');
//Route::get('enfermeras', function () {
//    return view('enfermeras.index');
//});