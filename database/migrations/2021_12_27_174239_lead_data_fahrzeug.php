<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadDataFahrzeug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lead_data_fahrzeug',function(Blueprint $table){
            $table->id();
            $table->string('vehicle_id');
            $table->string('leasing');
            $table->string('leasing_name');
            $table->string('year_of_purchase');
            $table->string('placing_on_the_market');
            $table->date('insurance_date');
            $table->string('redeemed');
            $table->string('km_stood');
            $table->string('issue_date');
            $table->string('nationality');
            $table->string('most_common');
            $table->string('insurance');
            $table->string('deductible');
            $table->string('carried');
            $table->string('repair_shop');
            $table->string('accident_coverage');
            $table->string('traffic_legal_protection');
            $table->string('grossly');
            $table->string('glass_protection');
            $table->string('parking_damage');
            $table->string('hour_breakdown_assistance');
            $table->string('comment');
            $table->integer('person_id'); //Foreign Key
            $table->integer('leads_id'); //Foreign Key
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
