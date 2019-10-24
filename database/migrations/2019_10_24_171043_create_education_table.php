<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p061');
            $table->integer('p061_1');
            $table->integer('p062');
            $table->string('p062_8_esp');
            $table->integer('p063');
            $table->integer('p064_1');
            $table->integer('p064_2');
            $table->integer('p064_3');
            $table->integer('p064_4');
            $table->integer('p064_5');
            $table->integer('p064_6');
            $table->integer('p064_7');
            $table->integer('p064_8');
            $table->integer('p064_9');
            $table->integer('p064_10');
            $table->integer('p064_11');
            $table->string('p064_11_esp');
            $table->integer('p064_12');
            $table->string('p064_12_esp');
            $table->integer('p064_13');
            $table->string('p064_13_esp');
            $table->integer('p064_a_1');
            $table->integer('p064_a_2');
            $table->integer('p064_a_3');
            $table->integer('p064_a_4');
            $table->integer('p064_a_5');
            $table->integer('p064_a_6');
            $table->integer('p064_a_7');
            $table->integer('p064_a_8');
            $table->integer('p064_a_9');
            $table->integer('p064_a_10');
            $table->integer('p064_a_11');
            $table->integer('p064_a_12');
            $table->integer('p064_a_13');
            $table->integer('p064_b_1');
            $table->integer('p064_b_2');
            $table->integer('p064_b_3');
            $table->integer('p064_b_4');
            $table->integer('p064_b_5');
            $table->integer('p064_b_6');
            $table->integer('p064_b_7');
            $table->integer('p064_b_8');
            $table->integer('p064_b_9');
            $table->integer('p064_b_10');
            $table->integer('p064_b_11');
            $table->integer('p064_b_12');
            $table->integer('p064_b_13');
            $table->integer('p065');
            $table->integer('p066_1');
            $table->integer('p066_2');
            $table->integer('p066_3');
            $table->integer('p066_4');
            $table->integer('p066_5');
            $table->string('p066_5_esp');
            $table->integer('p066_6');
            $table->string('p066_6_esp');
            $table->integer('p066_7');
            $table->string('p066_7_esp');
            $table->integer('p066_a_1');
            $table->integer('p066_a_2');
            $table->integer('p066_a_3');
            $table->integer('p066_a_4');
            $table->integer('p066_a_5');
            $table->integer('p066_a_6');
            $table->integer('p066_a_7');
            $table->integer('p066_b_1');
            $table->integer('p066_b_2');
            $table->integer('p066_b_3');
            $table->integer('p066_b_4');
            $table->integer('p066_b_5');
            $table->integer('p066_b_6');
            $table->integer('p066_b_7');
            $table->integer('p066_c_1');
            $table->integer('p066_c_2');
            $table->integer('p066_c_3');
            $table->integer('p066_c_4');
            $table->integer('p066_c_5');
            $table->integer('p066_c_6');
            $table->integer('p066_c_7');
            $table->integer('p066_d_1');
            $table->integer('p066_d_2');
            $table->integer('p066_d_3');
            $table->integer('p066_d_4');
            $table->integer('p066_d_5');
            $table->integer('p066_d_6');
            $table->integer('p066_d_7');
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
        Schema::dropIfExists('education');
    }
}
