<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteLocalProvaIdExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exames', function (Blueprint $table) {
            $table->dropForeign(['local_prova_id']);
            $table->dropColumn('local_prova_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exames', function (Blueprint $table) {
            $table->integer('local_prova_id')->unsigned();
            $table->foreign('local_prova_id')->references('id')->on('local_provas');
        });
    }
}
