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
            1 => 'consultant',
            2 => 'back Office',
            3 => 'team Leader',
            4 => 'sales Manager',
            5 => 'management',
            6 => 'it administrator',
            7 => 'it development',
            8 => 'finance',
            9 => 'admin'
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
