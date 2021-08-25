<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubopcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subopciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descripcion',200);
            $table->string('vinculo',250);
            $table->string('icono',250);
            $table->boolean('estatus');
            $table->tinyInteger('orden');
            $table->tinyInteger('target')->default(1)->comment('1=actual, 2=otro');
            $table->integer('idOpcion')->unsigned();
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
        Schema::dropIfExists('subopciones');
    }
}
