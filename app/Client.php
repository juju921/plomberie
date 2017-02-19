<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
     public function inovoice(){

        return $this->hasMany('App/Inovoices');
    }
}
