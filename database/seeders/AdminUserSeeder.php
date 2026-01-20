<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'apellidos' => 'Sistema',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'rol' => 'administrador',
        ]);

        User::create([
            'name' => 'Juan',
            'apellidos' => 'Pérez García',
            'email' => 'juan@example.com',
            'password' => Hash::make('usuario123'),
            'rol' => 'usuario',
        ]);
    }
}