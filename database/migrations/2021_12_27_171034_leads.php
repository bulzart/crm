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
            $table->date('birthdate')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->double('latitude', 11, 8)->nullable();
            $table->double('longitude', 11, 8)->nullable();
            $table->integer('number_of_persons')->nullable();
            $table->string('nationality')->nullable();
            $table->string('slug')->nullable();
            $table->string('status_task')->nullable();
            $table->string('status_contract')->nullable();
            $table->boolean('completed')->default(0);
            $table->date('appointment_date')->nullable();
            $table->integer('campaign_id'); //Foreign Key
            $table->integer('assign_to_id')->nullable(); //Foreign Key
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
