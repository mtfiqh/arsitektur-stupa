<?php

namespace App\Http\Controllers;

use App\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function kumpul(Request $request, $id){
        $tugas=\App\Task::findOrFail($id);
        // get data mahasiswa ini udah ngumpul tugas $id atau belum
        $collection = \App\Collection::where('task_id',$id)->where('user_id', Auth::User()->id)->first();
        if(!$collection){
            return $this->create($tugas);
        }else{
            return $this->update($tugas, $collection);
        }
    }

    public function create($tugas){
        return view('dashboard.kumpul-tugas', ['tugas'=>$tugas]);
    }

    public function update($tugas, $collection){

    }
}
