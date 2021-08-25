<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjuntos extends Model
{
    protected $table='adjuntos'; 
    
    public function tipo(){
       	   return $this->belongsTo(Tipos::class,'idTipo','id');             
    }     
     
}
