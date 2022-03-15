<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function personal()
    {
        return view('calendar.personal');
    }

    public function rentas()
    {
        return view('calendar.rentas');
    }
}
