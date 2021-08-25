<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subopcion extends Model
{
    protected $table='subopciones';

    public function opcion(){
           return $this->belongsTo(Opcion::class,'idOpcion','id');
    }       
}
