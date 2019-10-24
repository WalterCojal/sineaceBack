<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfEsteemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_esteems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p089_1');
            $table->integer('p089_2');
            $table->integer('p089_3');
            $table->integer('p089_4');
            $table->integer('p089_5');
            $table->integer('p089_6');
            $table->integer('p089_7');
            $table->integer('p089_8');
            $table->integer('p089_9');
            $table->integer('p089_10');
            $table->integer('p089_11');
            $table->integer('p089_12');
            $table->integer('p089_13');
            $table->integer('p089_14');
            $table->integer('p089_15');
            $table->integer('p089_16');
            $table->integer('p089_17');
            $table->integer('p089_18');
            $table->integer('p089_19');
            $table->integer('p089_20');
            $table->integer('p089_21');
            $table->integer('p089_22');
            $table->integer('p089_23');
            $table->integer('p089_24');
            $table->integer('p089_25');
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
        Schema::dropIfExists('self_esteems');
    }
}
