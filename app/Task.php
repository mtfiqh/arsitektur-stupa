<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Task extends Model
{
    //
    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->role->name!="admin"){
            // \App\User::whereHas('rooms', function ($query) {
            //     return $query->where('name','RA');
            // })->get();
                 return $query->where('user_id', Auth::User()->id);

        }
    }

}
