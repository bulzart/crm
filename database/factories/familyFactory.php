<?php

namespace Database\Factories;

use App\Models\family;
use Illuminate\Database\Eloquent\Factories\Factory;

class familyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthdate' => $this->faker->date('Y-m-d',2010),
            'leads_id' => random_int(1,30)
        ];
    }
}
