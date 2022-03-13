<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personas\EnfermerasController;

use App\Http\Controllers\Inventarios\InventariosconsumibleController;
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


Route::get('/mensajes', function () {
    return view('mensajes.mensajes');
})->middleware('auth');


Route::resource('enfermeras/servicios',EnfermerasController::class)->names('enfermeras.servicios')->middleware('auth');
Route::resource('inventarios/consumibles',InventariosconsumibleController::class)->names('inventarios.consumibles')->middleware('auth');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('enfermeras', [HomeController::class,'index'] ) ->name('enfermeras.index');
//Route::resource('enfermeras', App\Http\Controllers\Personas\EnfermerasController::class)->names('enfermeras');

//Route::get('/enfermeras', [EnfermerasController::class, 'index'])->name('enfermeras.index');
//Route::get('enfermeras', [App\Http\Controllers\Personas\EnfermerasController::class, 'index'])->name('home');
//Route::get('enfermeras', function () {
//    return view('enfermeras.index');
//});