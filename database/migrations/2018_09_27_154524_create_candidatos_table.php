<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->integer('rg')->unsigned();
            $table->string('orgao_emissor');
            $table->string('pis');
            $table->string('telefone', 15);
            $table->string('email');
            $table->boolean('servidor');
            $table->integer('siape')->unsigned()->nullable();
            $table->integer('banco_id')->unsigned();
            $table->string('agencia', 8);
            $table->string('operacao', 5)->nullable();
            $table->string('conta', 15);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('banco_id')->references('id')->on('bancos');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
