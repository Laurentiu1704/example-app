<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet; // Gebruik het Planet model

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all(); // Haal alle planeten op met Eloquent
        return view('planets', compact('planets')); 
    }
}
