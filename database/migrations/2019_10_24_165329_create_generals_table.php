<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('key');
            $table->string('sede aplicación');
            $table->string('sexo');
            $table->string('p090');
            $table->string('p091');
            $table->string('p092_1');
            $table->string('p092_2');
            $table->string('p092_3');
            $table->string('p092_4');
            $table->string('p093');
            $table->string('p094');
            $table->string('p095');
            $table->string('p096_1');
            $table->string('p096_2');
            $table->string('p096_3');
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
        Schema::dropIfExists('generals');
    }
}
