<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //untuk lihat semua tugas melalui ruangan -> tugas -> lihat semua collection
    public function viewAllRooms(){
        $rooms = \App\Room::all();

        return view('dashboard.viewAllRooms', ['rooms'=>$rooms]);
    }

    public function viewAllTasks($id){
        $room = \App\Room::findOrFail($id);
        $tasks = $room->tasks;
        // dd($tasks);

        return view('dashboard.viewAllTasks', ['tasks' => $tasks]);
    }

    public function viewAllCollections($idroom, $idtask){

    }




























    ){

    }
}
