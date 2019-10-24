<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertifiedActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certified_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p022_1');
            $table->integer('p022_2');
            $table->integer('p022_3');
            $table->integer('p022_4');
            $table->integer('p022_5');
            $table->integer('p022_6');
            $table->integer('p022_7');
            $table->integer('p022_8');
            $table->integer('p022_9');
            $table->integer('p022_10');
            $table->string('p022_10_esp');
            $table->integer('p023_1');
            $table->integer('p023_2');
            $table->integer('p023_3');
            $table->integer('p023_4');
            $table->integer('p023_5');
            $table->string('p023_5_esp');
            $table->integer('p024_1');
            $table->integer('p024_2');
            $table->integer('p024_3');
            $table->integer('p024_4');
            $table->integer('p024_5');
            $table->string('p024_5_esp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certified_activities');
    }
}
