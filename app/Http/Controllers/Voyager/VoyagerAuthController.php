<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    //
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';
}
