<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murales extends Model
{
    protected $table='murales'; 
    
    public function tipo(){    
    	   return $this->belongsTo(Tipos::class,'idTipo','id');             
    } 

}
