<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Costumers', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('civilstatus')->nullable();
            $table->string('surname')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Costumers', function (Blueprint $table) {
            //
        });
    }
}
