<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_exame', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidato_id')->unsigned();
            $table->integer('exame_id')->unsigned();
            $table->timestamps();

            $table->foreign('candidato_id')->references('id')->on('candidatos');
            $table->foreign('exame_id')->references('id')->on('exames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_exame');
    }
}
