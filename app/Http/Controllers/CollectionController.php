<?php

namespace App\Http\Controllers;

use App\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    public function kumpul(Request $request, $id){
        $tugas=\App\Task::findOrFail($id);
        // get data mahasiswa ini udah ngumpul tugas $id atau belum
        $collection = \App\Collection::where('task_id',$id)->where('user_id', Auth::User()->id)->first();
        if(!$collection){
            // return $this->create($tugas);
            $collection = new \App\Collection;
            $collection->task_id=$id;
            $collection->user_id=Auth::user()->id;
            $collection->save();
        }
        return $this->view($tugas, $collection);
    }

    public function view($tugas, $collection){
        return view('dashboard.kumpul-tugas', ['tugas'=>$tugas, 'collection'=>$collection]);
    }

    public function post(Request $request, $id){
        $collection = \App\Collection::find($request->collection_id);
        if(!$collection){
            return "error";
        }

        if($request->hasFile('uploads')){
            foreach($request->uploads as $file){
                $name = $file->getClientOriginalName();
                // return $name;
                $path = $file->store(Auth::user()->id.'/'.$id, 'public');
                $uploadFile = new \App\File;
                $uploadFile->name=$name;
                $uploadFile->path=$path;
                $uploadFile->collection_id = $collection->id;
                $uploadFile->user_id=Auth::user()->id;
                $uploadFile->save();
            }
        }

        $collection->description=$request->description;
        $collection->done=true;
        $collection->save();

        return redirect(route("timelinetugas"))->with('message','Berhasil mengumpulkan tugas');

    }

    public function deleteFile(Request $request){
        // return response($request);

        $file = \App\File::find($request->id);
        // return response($file);
        Storage::delete('public/'.$file->path);
        if($file->delete()){
            return response([
                'msg' => "File berhasil di hapus!",
            ],200);
        }

    }
}
