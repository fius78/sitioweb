<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarFkSubopcionOpcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subopciones', function (Blueprint $table) {
                $table->foreign('idOpcion')->references('id')->on('opciones')->onDelete('no action');                
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subopciones', function (Blueprint $table) {
                $table->dropForeign(['idOpcion']);               
        }); 
    }
}
