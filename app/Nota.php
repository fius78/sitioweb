<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table='notas';

    public function fotos(){
           return $this->hasMany(Fotos::class,'idNota','id');
    }     
}
