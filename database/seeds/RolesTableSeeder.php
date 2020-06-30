<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = \App\Role::create([
            'name'      => 'super_admin',
            'display_name'  => 'Admin',
            'description'   => 'Has All permissions'
        ]);
        $user = \App\Role::create([
            'name'      => 'user',
            'display_name'  => 'Normal User',
            'description'   => 'He Can Do a specific permissions'
        ]);
    }
}
