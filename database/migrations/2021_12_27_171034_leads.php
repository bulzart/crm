<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Leads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::drop('leads');
        Schema::create('leads',function(Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('telephone');
            $table->date('birthdate');
            $table->string('city');
            $table->string('address');
            $table->integer('postal_code');
            $table->double('latitude', 8, 6);
            $table->double('longitude', 8, 6);
            $table->integer('number_of_persons');
            $table->string('nationality');
            $table->string('slug');
            $table->string('status_task');
            $table->string('status_contract');
            $table->string('completed');
            $table->date('appointment_date');
            $table->integer('campaign_id'); //Foreign Key
            $table->integer('assign_to_id'); //Foreign Key
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
