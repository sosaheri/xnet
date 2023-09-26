<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allRoles = Role::all()->keyBy('id');
 
        $permissions = [
            'view-notes' => [Role::ROLE_JEFE, Role::ROLE_RESPONSABLE, Role::ROLE_EMPLEADO],
            'create-notes' => [Role::ROLE_EMPLEADO],
            'update-notes' => [Role::ROLE_EMPLEADO],
            'delete-notes' => [Role::ROLE_JEFE],
        ];
 
        foreach ($permissions as $key => $roles) {

            $permission = Permission::create(['name' => $key]);

            foreach ($roles as $role) {
                $allRoles[$role]->permissions()->attach($permission->id);
            }
        }
    }
}
