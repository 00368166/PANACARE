<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatesController extends Controller
{

    
    public function personal_activo()
    {
        return view('states.personal_activo');
    }

    public function personal_finalizado()
    {
        return view('states.personal_inactivo');
    }

    public function renta_activa()
    {
        return view('states.rentas_activas');
    }

    public function renta_finalizada()
    {
        return view('states.rentas_inactivas');
    }
    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function state_image(){
        return 'https://placeimg.com/100/100/user_icon';
    }
    public function equipo_image(){
        return 'https://placeimg.com/100/100/hospital';
    }
    
    //usage 
}
