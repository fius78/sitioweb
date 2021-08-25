<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table='videos'; 
    
    public function tipo(){    
    	   return $this->belongsTo(Tipos::class,'idTipo','id');             
    } 
    
}
