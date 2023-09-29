<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Note;
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
        
        User::create(
            [
            'name' => 'user',
            'email' => 'user@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_EMPLEADO,
            'department_id' => Department::DEPT_ATC,
            ]
        );

        User::create(
            [
            'name' => 'jefe atc',
            'email' => 'jefeatc@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_JEFE,
            'department_id' => Department::DEPT_ATC,
            ]
        );

        User::create(
            [
            'name' => 'responsable atc',
            'email' => 'respatc@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_RESPONSABLE,
            'department_id' => Department::DEPT_ATC,
            ]
        );

        User::create(
            [
            'name' => 'user2',
            'email' => 'user2@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_EMPLEADO,
            'department_id' => Department::DEPT_COMERCIAL,
            ]
        );

        User::create(
            [
            'name' => 'jefe comercial',
            'email' => 'jefecomercial@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_JEFE,
            'department_id' => Department::DEPT_COMERCIAL,
            ]
        );

        User::create(
            [
            'name' => 'responsable comercial',
            'email' => 'respcomercial@xnet.com',
            'password' => Hash::make('password'),
            'role_id' => Role::ROLE_RESPONSABLE,
            'department_id' => Department::DEPT_COMERCIAL,
            ]
        );

        Note::create(
            [
            'user_id' => 1,
            'department_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Mario Curtis',
            'customer_company' => 'company random',
            'customer_phone' => '555 5555',
            ]
        );

        Note::create(
            [
            'user_id' => 1,
            'department_id' => 5,
            'description' => 'Donec gravida, neque et euismod semper, magna arcu dictum tortor,',
            'customer_name' => 'Peter Parker',
            'customer_company' => 'le carbusiere',
            'customer_phone' => '555 5555',
            'observation' => 'Necesitamos cambios',
            'saved_at' => now(),
            'status' => 'process'
            ]
        );

        Note::create(
            [
            'user_id' => 1,
            'department_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Magnus Gregorius',
            'customer_company' => 'Scholl Xm',
            'customer_phone' => '555 5555',
            'status' => 'finish'
            ]
        );

        Note::create(
            [
            'user_id' => 1,
            'department_id' => 4,
            'description' => 'Donec gravida, neque et euismod semper, magna arcu dictum tortor,',
            'customer_name' => 'Amy  Sun',
            'customer_company' => 'Petite Cat',
            'customer_phone' => '555 5555',
            'deleted_at' => now()
            ]
        );

        Note::create(
            [
            'user_id' => 2,
            'department_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Maria Tejo',
            'customer_company' => 'company premiere',
            'customer_phone' => '555 5555',
            ]
        );        
        Note::create(
            [
            'user_id' => 2,
            'department_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Pedro Skull',
            'customer_company' => 'El Paso',
            'customer_phone' => '555 5555',
            ]
        );
        Note::create(
            [
            'user_id' => 2,
            'department_id' => 5,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Elon Musk',
            'customer_company' => 'Tesla',
            'customer_phone' => '555 5555',
            ]
        );        
        Note::create(
            [
            'user_id' => 2,
            'department_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin',
            'customer_name' => 'Mark Suckerber',
            'customer_company' => 'FB',
            'customer_phone' => '555 5555',
            ]
        );
    }
}
