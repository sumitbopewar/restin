<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        Role::truncate();

        Permission::create(['name' => 'Add User']);
        Permission::create(['name' => 'View Users']);
        

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Schema::enableForeignKeyConstraints();
    }
}