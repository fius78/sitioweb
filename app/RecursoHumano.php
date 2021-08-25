<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoHumano extends Model
{
    protected $table='recursoshumanos'; 
        
    public function tipos(){
           return $this->belongsToMany(Tipos::class)->withTimestamps(); 
    }
}
