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
            // return $query->whereExists(function ($query) {
            //     $query->from('room_user')
            //           ->whereRaw('room_user.user_id = '.Auth::user()->id)
            //           ->whereExists(function ($query){
            //                 $query->from('room_task')
            //                 ->whereRaw('room_task.room_id = room_user.room_id');
            //           });
            // });

        }
    }

}
