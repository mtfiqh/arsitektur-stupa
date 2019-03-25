<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datausers extends Model
{
    //
    protected $fillable = [
        'identity'
    ];

    public function user(){
        return $this->belongsTo('App\user');
    }
}
