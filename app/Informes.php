<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informes extends Model
{
    protected $table='informes';

    public function contable(){
           return $this->belongsTo(Contables::class,'idContable','id');
    }    
}
