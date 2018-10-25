<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExameIdLocalProvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('local_provas', function (Blueprint $table) {
            $table->integer('exame_id')->unsigned()->after('escola');

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
        Schema::table('local_provas', function (Blueprint $table) {
            $table->dropForeign(['exame_id']);
            $table->dropColumn('exame_id');
        });
    }
}
