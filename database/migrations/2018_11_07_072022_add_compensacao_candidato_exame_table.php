<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompensacaoCandidatoExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidato_exame', function (Blueprint $table) {
            $table->integer('compensacao')->nullable()->default(0)->after('local_prova_id');
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
            $table->dropColumn('compensacao');
        });
    }
}
