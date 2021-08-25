<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    protected $table='opciones';

    public function subopciones(){
           return $this->hasMany(Subopcion::class,'idOpcion','id');
    }     
}
