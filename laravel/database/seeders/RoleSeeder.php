<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin', 'lable' => 'can perform admin related tasks']);

        $role = Role::first();
        $permissions = Permission::all();

        foreach ($permissions as $permission) {
            $role->givePermission($permission);
        }
    }
}
