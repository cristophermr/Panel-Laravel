<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationsController extends Controller
{
    function getCantones($provincia)
    {
        $Cantones = DB::table('geo2')->WHERE('province',$provincia)->get();
        return view('Divisiones.cantones', compact('Cantones'));
    }
    function getDistritos($provincia,$canton)
    {
        $Distritos = DB::table('geo3')->WHERE([['province',$provincia],['canton',$canton]])->get();
        return view('Divisiones.distritos', compact('Distritos'));
    }
    function getBarrios($provincia,$canton,$distrito)
    {
        $Barrios =  DB::table('geo4')->WHERE([['province',$provincia],['canton',$canton],['district',$distrito]])->get();
        return view('Divisiones.barrios', compact('Barrios'));
    }
}
