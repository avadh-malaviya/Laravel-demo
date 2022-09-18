<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'add student'
        ]);
        Permission::create([
            'name' => 'edit student'
        ]);
        Permission::create([
            'name' => 'delete student'
        ]);
        Permission::create([
            'name' => 'view student'
        ]);
        Permission::create([
            'name' => 'add permission'
        ]);
        Permission::create([
            'name' => 'edit permission'
        ]);
        Permission::create([
            'name' => 'delete permission'
        ]);
        Permission::create([
            'name' => 'view permission'
        ]);
        Permission::create([
            'name' => 'add role'
        ]);
        Permission::create([
            'name' => 'edit role'
        ]);
        Permission::create([
            'name' => 'delete role'
        ]);
        Permission::create([
            'name' => 'view role'
        ]);
        Permission::create([
            'name' => 'add user'
        ]);
        Permission::create([
            'name' => 'edit user'
        ]);
        Permission::create([
            'name' => 'delete user'
        ]);
        Permission::create([
            'name' => 'view user'
        ]);
    }
}
