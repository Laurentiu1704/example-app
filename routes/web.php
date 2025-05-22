<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\PlanetController;

Route::get('/roles-users', [RoleUserController::class, 'index']);
Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
