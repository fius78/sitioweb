<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsideracionLey extends Model
{
    protected $table='consideracion_ley';	

    public function tipo(){
           return $this->hasOne(Tipos::class,'id','idTipo'); 
    }
  
}
