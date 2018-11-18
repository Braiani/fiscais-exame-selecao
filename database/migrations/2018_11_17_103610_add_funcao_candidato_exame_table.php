<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFuncaoCandidatoExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidato_exame', function (Blueprint $table) {
            $table->enum('funcao', ['', 'coord', 'chefe', 'sala', 'corredor', 'banheiro', 'outro'])->after('aprovado')->default('');
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
            $table->dropColumn('funcao');
        });
    }
}
