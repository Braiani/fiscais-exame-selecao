<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocalProvaCandidatoExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidato_exame', function (Blueprint $table) {
            $table->integer('local_prova_id')->unsigned()->after('exame_id');

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
        Schema::table('candidato_exame', function (Blueprint $table) {
            $table->dropForeign(['local_prova_id']);
            $table->dropColumn('local_prova_id');
        });
    }
}
