<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAprovadoCandidatoExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidato_exame', function (Blueprint $table) {
            $table->boolean('aprovado')->nullable()->default(null)->after('local_prova_id');
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
            $table->dropColumn('aprovado');
        });
    }
}
