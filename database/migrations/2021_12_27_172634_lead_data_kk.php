<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadDataKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lead_data_kk',function(Blueprint $table){
            $table->id();
            $table->string('pre_insurer')->nullable();
            $table->string('id_required')->nullable();
            $table->string('notice_by')->nullable();
            $table->string('power_of_attorney')->nullable();
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
