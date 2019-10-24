<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicActivityMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_activity_mains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p030');
            $table->string('p030_2_esp');
            $table->integer('p031');
            $table->string('p031_7_esp');
            $table->integer('p032');
            $table->string('p032_12_esp');
            $table->integer('p033');
            $table->string('p033_8_esp');
            $table->integer('p034');
            $table->integer('p034_esp');
            $table->string('p035');
            $table->integer('p036_1');
            $table->integer('p036_2');
            $table->integer('p037');
            $table->string('p037_8_esp');
            $table->string('p037_1');
            $table->integer('p038');
            $table->integer('p039');
            $table->integer('p040');
            $table->integer('p041_1');
            $table->integer('p041_2');
            $table->integer('p041_3');
            $table->integer('p041_4');
            $table->integer('p041_5');
            $table->integer('p041_6');
            $table->string('p041_6_esp');
            $table->integer('p041_1_1');
            $table->integer('p041_2_1');
            $table->integer('p041_3_1');
            $table->integer('p041_4_1');
            $table->integer('p041_5_1');
            $table->integer('p041_6_1');
            $table->integer('p041_1_2');
            $table->integer('p041_2_2');
            $table->integer('p041_3_2');
            $table->integer('p041_4_2');
            $table->integer('p041_5_2');
            $table->integer('p041_6_2');
            $table->integer('p042_1');
            $table->integer('p042_2');
            $table->integer('p042_3');
            $table->integer('p042_4');
            $table->integer('p042_5');
            $table->integer('p042_6');
            $table->string('p042_4_esp');
            $table->string('p042_5_esp');
            $table->integer('p043');
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
        Schema::dropIfExists('economic_activity_mains');
    }
}
