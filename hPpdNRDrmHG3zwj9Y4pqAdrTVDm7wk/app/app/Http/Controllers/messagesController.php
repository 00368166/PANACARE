<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function mensajes(){
        $test = DB::table('message')->get();
        return $test;
    }
}
