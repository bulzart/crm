<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadDataS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lead_data_s',function(Blueprint $table){
            $table->id();
            $table->string('nationality');
            $table->string('residence_permit');
            $table->string('telephone_nr');
            $table->string('employment_relationship');
            $table->string('job');
            $table->string('payment_frequency');
            $table->string('amount_per_month');
            $table->string('share_guarantee');
            $table->string('start_of_contract');
            $table->string('premium_exemption');
            $table->string('eu_pension');
            $table->string('death_benefit');
            $table->string('smoker');
            $table->string('desired');
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
