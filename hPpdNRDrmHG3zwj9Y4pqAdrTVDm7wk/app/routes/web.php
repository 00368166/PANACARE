<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personas\EnfermerasController;
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

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/home', function () {
    return view('admin.admin');
});


Route::get('/mensajes', function () {
    return view('mensajes.mensajes');
});


Route::resource('enfermeras/servicios',EnfermerasController::class)->names('enfermeras.servicios');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('enfermeras', [HomeController::class,'index'] ) ->name('enfermeras.index');
//Route::resource('enfermeras', App\Http\Controllers\Personas\EnfermerasController::class)->names('enfermeras');

//Route::get('/enfermeras', [EnfermerasController::class, 'index'])->name('enfermeras.index');
//Route::get('enfermeras', [App\Http\Controllers\Personas\EnfermerasController::class, 'index'])->name('home');
//Route::get('enfermeras', function () {
//    return view('enfermeras.index');
//});