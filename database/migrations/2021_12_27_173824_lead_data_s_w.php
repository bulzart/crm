<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadDataSW extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lead_data_s_w',function(Blueprint $table){
            $table->id();
            $table->string('upload_police');
            $table->string('comparison_type');
            $table->string('comment');
            $table->integer('number_of_people');
            $table->integer('number_of_rooms');
            $table->string('sum_insured');
            $table->string('desired_additional_coverage');
            $table->string('personal_liability');
            $table->string('society');
            $table->string('n_of_p_legal_protection');
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
