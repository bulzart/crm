<?php

namespace Database\Factories;

use App\Models\lead;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = lead::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'count' => random_int(1,7),
             'campaign_id' => random_int(1,2),
             'admin_id' => random_int(1,9),
             'assigned' => random_int(0,1),
             'completed' => random_int(0,1),
             'address' => $this->faker->address(),
             'telprivat' => $this->faker->phoneNumber(),
             'appointmentdate' => Carbon::now()->addDays(random_int(0,28))->format('Y-m-d'),
             'lname' => $this->faker->lastName(),
             'time' => $this->faker->time('H:i'),
             'slug' => str::slug('client'.random_int(0,9999999999)),
             'lati' => $this->faker->latitude(),
             'longi' => $this->faker->longitude()

           
        ];
    }
}
