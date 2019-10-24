<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p025_1');
            $table->integer('p025_2');
            $table->integer('p025_3');
            $table->integer('p025_4');
            $table->integer('p025_5');
            $table->integer('p025_6');
            $table->integer('p025_7');
            $table->string('p025_7_esp');
            $table->integer('p026');
            $table->string('p026_5_esp');
            $table->integer('p027');
            $table->integer('p028');
            $table->string('p029_1');
            $table->string('p029_2');
            $table->string('p029_3');
            $table->string('p029_4');
            $table->string('p029_5');
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
        Schema::dropIfExists('economic_activities');
    }
}
