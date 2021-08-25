<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{
    protected $table='anexos';

    public function sesion(){
           return $this->belongsTo(Sesiones::class,'idSesion','id');
    } 
}
