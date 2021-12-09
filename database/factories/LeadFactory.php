<?php

namespace Database\Factories;

use App\Models\lead;
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
            'count' => random_int(1,10),
            'comefrom' =>  Str::random(6),
             'campaign_id' => random_int(1,10000),
             'admin_id' => random_int(1,10000),
           
        ];
    }
}
