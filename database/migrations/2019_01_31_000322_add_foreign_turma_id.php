<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignTurmaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professores' , function(Blueprint $table){
            $table->unsignedInteger('turma_id')->after('materia');
            $table->foreign('turma_id')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professores', function(Blueprint $table){
            $table->dropForeign(['turmas_id']);
            $table->dropColumn('turmas_id');
        });
    }
}
