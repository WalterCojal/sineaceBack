<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicActivitySecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_activity_secs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->string('p044_1');
            $table->string('p044_2');
            $table->string('p044_3');
            $table->string('p045');
            $table->integer('p046');
            $table->string('p046_7_esp');
            $table->integer('p047');
            $table->string('p047_12_esp');
            $table->integer('p048');
            $table->string('p048_8_esp');
            $table->integer('p049');
            $table->integer('p049_esp');
            $table->integer('p050');
            $table->integer('p051_1');
            $table->integer('p051_2');
            $table->integer('p052');
            $table->string('p052_8_esp');
            $table->string('p052_1');
            $table->integer('p053');
            $table->integer('p054');
            $table->integer('p055_1');
            $table->integer('p055_2');
            $table->integer('p055_3');
            $table->integer('p055_4');
            $table->integer('p055_5');
            $table->integer('p055_6');
            $table->string('p055_6_esp');
            $table->integer('p055_1_1');
            $table->integer('p055_2_1');
            $table->integer('p055_3_1');
            $table->integer('p055_4_1');
            $table->integer('p055_5_1');
            $table->integer('p055_6_1');
            $table->integer('p055_1_2');
            $table->integer('p055_2_2');
            $table->integer('p055_3_2');
            $table->integer('p055_4_2');
            $table->integer('p055_5_2');
            $table->integer('p055_6_2');
            $table->integer('p056_1');
            $table->integer('p056_2');
            $table->integer('p056_3');
            $table->integer('p056_4');
            $table->integer('p056_5');
            $table->integer('p056_6');
            $table->string('p056_4_esp');
            $table->string('p056_5_esp');
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
        Schema::dropIfExists('economic_activity_secs');
    }
}
