<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ouvrage extends Model
{
    //
     public function inovoice(){

        return $this->hasMany('App/Inovoices');
    }
}
