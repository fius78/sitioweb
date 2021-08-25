<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoshumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursoshumanos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombreIntegrante',200);
            $table->string('cargo',200);
            $table->string('puesto',200);
            $table->string('email',250);
            $table->string('telefono',50);
            $table->string('foto',255);
            $table->string('logo',255);
            $table->longText('curriculum');
            $table->boolean('estatus');         
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
        Schema::dropIfExists('recursoshumanos');
    }
}
