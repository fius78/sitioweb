<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    protected $table='fotos';

    public function nota(){
           return $this->belongsTo(Nota::class,'idNota','id');
    } 
}
