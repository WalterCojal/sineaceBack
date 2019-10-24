<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_markets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p057_1');
            $table->integer('p057_2');
            $table->integer('p057_3');
            $table->integer('p057_4');
            $table->integer('p057_5');
            $table->integer('p057_6');
            $table->integer('p057_7');
            $table->string('p057_7_esp');
            $table->integer('p058_1');
            $table->integer('p058_2');
            $table->integer('p058_3');
            $table->integer('p058_4');
            $table->integer('p058_5');
            $table->integer('p058_6');
            $table->integer('p058_7');
            $table->string('p058_7_esp');
            $table->integer('p059_1');
            $table->integer('p059_2');
            $table->integer('p059_3');
            $table->integer('p059_4');
            $table->integer('p059_5');
            $table->integer('p059_6');
            $table->integer('p059_6_esp');
            $table->integer('p060');
            $table->string('p060_1');
            $table->string('p060_2');
            $table->string('p060_3');
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
        Schema::dropIfExists('finance_markets');
    }
}
