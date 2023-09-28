<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(DepartmentSeeder::class);
        
        User::create([
            'name' => 'user',
            'email' => 'user@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_EMPLEADO,
            'department_id' => Department::DEPT_ATC,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
