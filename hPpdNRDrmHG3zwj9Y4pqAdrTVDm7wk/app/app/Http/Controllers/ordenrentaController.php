<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ordenrenta;

use App\Models\detallerenta;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Illuminate\Database\Eloquent\Collection;


class ordenrentaController extends Controller
{
    public function index()
    {
        return view('orden.renta');
    }
}
