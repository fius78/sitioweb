<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    protected $table='tipos';

    public function integrante(){
           return $this->belongsTo(Integrantes::class,'idTipo','id');    
    }
    
    public function concideracionley(){
           return $this->belongsTo(ConsideracionLey::class,'idTipo','id');    
    } 
    
    public function recursohumano(){
           return $this->belongsToMany(RecursoHumano::class)->withTimestamps();    
    }
    
    public function adjuntos(){
           return $this->hasMany(Adjuntos::class,'idTipo','id');
    }                
    
    public function videos(){
           return $this->hasMany(Videos::class,'idTipo','id');
    }                
        
    public function mural(){
           return $this->hasMany(Murales::class,'idTipo','id');
    }                
    
    public function sesiones(){
           return $this->hasMany(Sesiones::class,'idTipo','id');
    }
}