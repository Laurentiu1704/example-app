<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        // Maak roles aan
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $userRole = Role::create(['name' => 'user']);
        
        // Haal users op of maak nieuwe aan
        $user1 = User::find(1) ?? User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com']);
        $user2 = User::find(2) ?? User::factory()->create(['name' => 'Jane Smith', 'email' => 'jane@example.com']);
        
        // Ken roles toe aan users
        $user1->roles()->attach([$adminRole->id, $userRole->id]);
        $user2->roles()->attach([$editorRole->id]);
    }
}