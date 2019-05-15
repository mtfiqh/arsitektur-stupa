<?php

namespace App\Http\Controllers\Voyager;


use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;
use TCG\Voyager\Facades\Voyager;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    //
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    public function login()
    {
        if (app('VoyagerAuth')->user()) {
            return redirect()->route('voyager.dashboard');
        }

        return Voyager::view('auth.login');
    }
}
