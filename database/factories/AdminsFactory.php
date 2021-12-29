<?php

namespace Database\Factories;

use App\Models\Admins;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
              'name' => $this->faker->name(),
              'email' => 'bulzarti' . random_int(50,4000) . '@gmail.com',
              'password' => Hash::make('123456'),
              
        ];
    }
}