<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'Atención al cliente']);
        Department::create(['name' => 'Recursos Humanos']);
        Department::create(['name' => 'Comercial']);
        Department::create(['name' => 'Limpieza']);
        Department::create(['name' => 'Planta de reciclaje']);
    }
}
