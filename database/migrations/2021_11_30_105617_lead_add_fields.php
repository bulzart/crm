<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadAddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('advisor')->index()->nullable();
            $table->string('day')->nullable();
            $table->string('language')->nullable();
            $table->string('nationality')->index()->nullable();
            $table->integer('postcode')->nullable();
            $table->string('location')->index()->nullable();
            $table->string('telprivat')->index()->nullable();
            $table->string('appointmentdate')->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
    }
}
