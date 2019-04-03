<?php

namespace App\Http\Controllers\Voyager;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;

class VoyagerController extends BaseVoyagerController
{
    public function __construct(){
        $this->middleware('hasRole');
    }
    /**
     * override index function
     * menampilkan index sesuai role
     */
    public function index()
    {
        if(Auth::user()->role->name == "mahasiswa"){
            $semuaKelas = \App\Room::orderBy('tahun', 'DESC')->orderBy('smester', 'DESC')->get();
            return view("dashboard.mahasiswa", ["semuaKelas" => $semuaKelas]);
        }
        return view("dashboard.".Auth::user()->role->name);
    }

    /**
     * override logout function
     * ganti redirect setelah logout dari voyager.login, ke login
     */
    public function logout()
    {
        app('VoyagerAuth')->logout();

        return redirect()->route('login');
    }
}
