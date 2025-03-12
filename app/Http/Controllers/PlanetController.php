<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        // Haal alle planeten op, inclusief hun zonnestelsel
        $planets = Planet::with('solarSystem')->get();

        return view('planets', compact('planets')); 
    }
}
