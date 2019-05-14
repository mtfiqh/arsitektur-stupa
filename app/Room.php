<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    //get data from relationship database
    public function datausers(){
        return $this->belongsToMany('App\Datauser');
    }

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->role->name=="dosen"){
            // \App\User::whereHas('rooms', function ($query) {
            //     return $query->where('name','RA');
            // })->get();
                 return $query->whereExists(function ($query) {
                    $query->from('room_user')
                          ->whereRaw('room_user.user_id = '.Auth::user()->id)
                          ->whereRaw('room_user.room_id = rooms.id');
                });

        }
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function tasks()
    {
        return $this->belongsToMany('App\Task')->orderBy('created_at','desc');
    }
}
