<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Gebruik Query Builder

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get(); // Haal data op zonder Eloquent
        dd($planets);
        return view('planets', compact('planets'));
    }
}


