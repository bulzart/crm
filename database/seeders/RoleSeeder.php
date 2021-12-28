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
            1 => 'Consultant',
            2 => 'Back Office',
            3 => 'Team Leader',
            4 => 'Sales Manager',
            5 => 'Management',
            6 => 'IT Administrator',
            7 => 'IT Development',
            8 => 'Finance',
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
