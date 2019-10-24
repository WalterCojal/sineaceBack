<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p008');
            $table->string('p008_9_esp');
            $table->integer('p009');
            $table->string('p009_8_esp');
            $table->integer('p010');
            $table->string('p010_4_esp');
            $table->integer('p011');
            $table->integer('p012');
            $table->string('p012_8_esp');
            $table->integer('p013');
            $table->string('p013_6_esp');
            $table->integer('p014_1');
            $table->integer('p014_2');
            $table->integer('p014_3');
            $table->integer('p014_4');
            $table->integer('p014_5');
            $table->integer('p014_6');
            $table->string('p014_6_esp');
            $table->integer('p015_1');
            $table->string('p015_2');
            $table->string('p015_3');
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
        Schema::dropIfExists('homes');
    }
}
