<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadDataAdded;


/**
 * controller override from voyager controller
 * edit on BREAD voyager config to use this controller
 */
class RoomController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function update(Request $request, $id)
    {
        $kelas = \App\Room::FindOrFail($id);
        $kelas->display_name = $request->nama.' '.$request->tahun.' '.$request->smester;
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
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());
        $data->display_name = $request->nama.' '.$request->tahun.' '.$request->smester;
        $data->save();
        event(new BreadDataAdded($dataType, $data));

        return redirect()
        ->route("voyager.{$dataType->slug}.index")
        ->with([
                'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }
}
