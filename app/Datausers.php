<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datausers extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\user');
    }
}
