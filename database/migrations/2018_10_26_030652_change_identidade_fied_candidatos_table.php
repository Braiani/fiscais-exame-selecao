<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIdentidadeFiedCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidatos', function (Blueprint $table) {
            $table->dropColumn('rg');
            $table->renameColumn('orgao_emissor', 'identidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidatos', function (Blueprint $table) {
            $table->integer('rg');
            $table->renameColumn('identidade', 'orgao_emissor');
        });
    }
}
