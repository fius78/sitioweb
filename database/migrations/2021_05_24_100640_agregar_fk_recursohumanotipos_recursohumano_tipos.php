<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarFkRecursohumanotiposRecursohumanoTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recurso_humano_tipos', function (Blueprint $table) {
                $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('no action');
                $table->foreign('recurso_humano_id')->references('id')->on('recursoshumanos')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recurso_humano_tipos', function (Blueprint $table) {
                $table->dropForeign(['tipos_id']);
                $table->dropForeign(['recurso_humano_id']);
        });
    }
}
