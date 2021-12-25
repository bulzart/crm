<?php

namespace Database\Seeders;

use App\Models\lead;
use Illuminate\Database\Seeder;

class LeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lead::factory()->count(400)->create();
    }
}
