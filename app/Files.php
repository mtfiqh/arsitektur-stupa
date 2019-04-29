<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    //
    public function collection(){
        return $this->belongsTo('App\Collection');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
