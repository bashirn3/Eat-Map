<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function Vendor(){
        return $this->belongsTo('App\Vendor');

    }
}
