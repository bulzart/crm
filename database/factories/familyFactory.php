<?php

namespace Database\Factories;

use App\Models\family;
use Carbon\Carbon;
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
            'birthdate' => Carbon::now()->subDays(random_int(0,12000))->format('Y-m-d'),
            'leads_id' => random_int(1,30)
        ];
    }
}
