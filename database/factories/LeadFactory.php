<?php

namespace Database\Factories;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'telephone' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->date('Y-m-d',1990),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'postal_code' => random_int(5000,10000),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'number_of_persons' => random_int(0,5),
            'nationality' => $this->faker->country(),
            'slug' => $this->faker->slug(),
            'completed' => random_int(0,1),
            'campaign_id' => random_int(1,3),
            'appointment_date' => Carbon::now()->addDay(random_int(0,21))->format('Y-m-d'),
        ];
    }
}
