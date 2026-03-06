<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario admin
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@riesgoscasa.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        // Crear usuario regular de prueba
        User::factory()->create([
            'name' => 'Usuario Demo',
            'email' => 'usuario@demo.com',
            'password' => bcrypt('demo123'),
            'is_admin' => false,
        ]);
    }
}
