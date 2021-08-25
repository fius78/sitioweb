<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    protected $table='integrantes_saeqroo'; 
    
    public function tipo(){
           return $this->hasOne(Tipos::class,'id','idTipo'); 
    } 
    	
} 
