<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function index()
    {
        $usersWithRoles = User::with('roles')->get();
        
        return response()->json([
            'data' => $usersWithRoles,
        ]);
    }
}