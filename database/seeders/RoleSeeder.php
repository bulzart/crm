<?php

namespace Database\Seeders;

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
        $roles = [
            1 => 'fs',
            2 => 'backoffice',
            3 => 'team Leader',
            4 => 'sales Manager',
            5 => 'management',
            6 => 'finance',
            7 => 'admin'
        ];



        foreach($roles as $id => $role){
            Role::create([
                'id' => $id,
                'name' => $role,
                'guard_name' => 'admins'
            ]);
        }
    }
}
