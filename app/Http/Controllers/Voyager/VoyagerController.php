<?php

namespace App\Http\Controllers\Voyager;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;

class VoyagerController extends BaseVoyagerController
{
    /**
     * override index function
     * menampilkan index sesuai role
     */
    public function index()
    {
        if($this->middleware('hasRole')){
            return view("dashboard.".Auth::user()->role->name);
        }else{
            echo "Kamu tidak punya izin, silahkan hubungi dosen bersangkutan";
        }
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
