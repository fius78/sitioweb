<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarFkIntegranteTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('integrantes_saeqroo', function (Blueprint $table) {
                $table->foreign('idTipo')->references('id')->on('tipos')->onDelete('no action');                
        });         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('integrantes_saeqroo', function (Blueprint $table) {
                $table->dropForeign(['idTipo']);               
        });
    }
}
