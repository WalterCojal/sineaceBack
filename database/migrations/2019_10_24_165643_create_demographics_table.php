<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p001');
            $table->integer('p002');
            $table->integer('p003');
            $table->string('p003_1');
            $table->integer('p004');
            $table->integer('p005');
            $table->integer('p006');
            $table->integer('p007_1');
            $table->string('p007_1_4_esp');
            $table->integer('p007_2');
            $table->string('p007_2_4_esp');
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
        Schema::dropIfExists('demographics');
    }
}
