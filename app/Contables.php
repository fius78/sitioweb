<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contables extends Model
{
    protected $table='contables';

    public function informes(){
           return $this->hasMany(Informes::class,'idContable','id');
    }     
}
