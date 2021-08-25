<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
    protected $table='sesiones'; 
    
    public function sesion(){    
    	   return $this->belongsTo(Tipos::class,'idTipo','id');             
    }

    public function anexos(){
           return $this->hasMany(Anexos::class,'idSesion','id');
    }     
}
