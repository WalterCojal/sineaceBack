<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpectativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expectatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p071');
            $table->string('p071_3_esp');
            $table->integer('p072');
            $table->string('p072_3_esp');
            $table->integer('p073');
            $table->string('p073_3_esp');
            $table->integer('p074');
            $table->integer('p075');
            $table->integer('p076_1');
            $table->integer('p076_2');
            $table->integer('p076_3');
            $table->integer('p076_4');
            $table->integer('p076_5');
            $table->string('p076_5_esp');
            $table->integer('p077');
            $table->integer('p078');
            $table->integer('p079');
            $table->string('p079_esp');
            $table->integer('p080');
            $table->integer('p081');
            $table->integer('p082');
            $table->string('p082_esp');
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
        Schema::dropIfExists('expectatives');
    }
}
