<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('externals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p083_1');
            $table->integer('p083_2');
            $table->integer('p083_3');
            $table->integer('p083_4');
            $table->integer('p083_5');
            $table->integer('p083_6');
            $table->integer('p083_7');
            $table->integer('p084');
            $table->integer('p085');
            $table->string('p085_5_esp');
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
        Schema::dropIfExists('externals');
    }
}
