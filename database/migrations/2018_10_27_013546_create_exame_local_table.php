<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_local', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exame_id')->unsigned();
            $table->integer('local_prova_id')->unsigned();

            $table->foreign('exame_id')->references('id')->on('exames');
            $table->foreign('local_prova_id')->references('id')->on('local_provas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exame_local');
    }
}
