<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('general_id');
            $table->integer('p016');
            $table->integer('p016_1');
            $table->integer('p017_1');
            $table->integer('p017_2');
            $table->integer('p017_3');
            $table->integer('p017_4');
            $table->integer('p017_5');
            $table->integer('p017_6');
            $table->integer('p017_7');
            $table->string('p017_7_esp');
            $table->integer('p018');
            $table->integer('p019_1');
            $table->integer('p019_2');
            $table->integer('p019_3');
            $table->integer('p019_4');
            $table->integer('p019_5');
            $table->string('p019_5_esp');
            $table->integer('p020');
            $table->string('p020_1');
            $table->integer('p021');
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
        Schema::dropIfExists('certifications');
    }
}
