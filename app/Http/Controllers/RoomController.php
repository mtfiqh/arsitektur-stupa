<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadDataAdded;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;



/**
 * controller override from voyager controller
 * edit on BREAD voyager config to use this controller
 */
class RoomController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function update(Request $request, $id)
    {
        $kelas = \App\Room::FindOrFail($id);
        $kelas->display_name = $request->nama.' '.$request->tahun.' smester '.$request->smester;
        $kelas->save();

        return parent::update($request,$id);
    }

        /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request);
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        if($request->smester<=0){
            return redirect()
        ->back()
        ->with([
                'message'    => __('Smester tidak bisa kurang dari sama dengan 0'),
                'alert-type' => 'error',
                'dataTypeContent' => 
                    [
                        'nama' => $request->nama,
                        'tahun' => $request->tahun,
                        'smester'=>$request->smester,
                        'password'=> $request->password,
                    ],
            ]);
        }
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());
        $data->display_name = $request->nama.' '.$request->tahun.' smester '.$request->smester;
        $data->save();
        event(new BreadDataAdded($dataType, $data));

        return redirect()
        ->route("voyager.{$dataType->slug}.index")
        ->with([
                'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    public function enrollview($id){
        if(Auth::User()->room_id!=null){
            return '404';
        }
        $kelas=\App\Room::findOrFail($id);
        return view('dashboard.mahasiswa-enroll', ['kelas' => $kelas, 'id'=>$id]);
    }

    public function enroll(Request $request, $id){
        if(Auth::User()->room_id==null){
            $kelas = \App\Room::findOrFail($id);
            $password= $kelas->password ? : "";
            if(Hash::check($request->password, $password) || ($request->password==$password)){
                Auth::user()->room_id = $id;
                Auth::user()->save();

                return redirect('user')->with([
                    'message' => 'Berhasil melakukan enroll',
                    'alert-type' => 'success'
                ]);;
            }else{
                return redirect()->back()->with([
                    'message' => 'password enroll salah',
                    'alert-type' => 'error'
                ]);
            }
        }
    }

    public function unenroll(){

        $user= Auth::user();
        $user->room_id=null;
        $user->save();

        return redirect('user');
    }

    public function viewKelas(){
        if(Auth::user()->role->name == "mahasiswa"){
            $datas = Auth::user()->room_id==null ? \App\Room::orderBy('tahun', 'DESC')->orderBy('smester', 'DESC')->get() : Auth::user()->room->tasks;
            return view("dashboard.daftar-kelas-mahasiswa", [$datas==null? : "datas"=>$datas]);
        }
    }




}
