<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;

class VoyagerController extends BaseVoyagerController
{
    //

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
