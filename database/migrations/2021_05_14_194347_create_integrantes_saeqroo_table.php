<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegrantesSaeqrooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes_saeqroo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo',200)->nullable();
            $table->string('img_principal',150);
            $table->string('img_organizacion',150);
            $table->longText('descripcion');
            $table->longText('mision');
            $table->longText('vision');
            $table->boolean('estatus');
            $table->integer('idTipo')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrantes_saeqroo');
    }
}
