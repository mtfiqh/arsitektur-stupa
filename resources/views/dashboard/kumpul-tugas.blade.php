@extends('voyager::master')

@section('content')
    <div class="row col-md-12">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h3>Pengumpulan {{$tugas->title}}</h3>
                        </div>
                        <div class="card-body">
                            
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                                <input type="hidden" name="task_id" value="">
                                
                                <label class="label-control" for="description">Deskripsi Tugas</label>
                                <textarea class="form-control richTextBox" name="description" id="richtextdescription">
                                   
                                </textarea>
                                <div class="panel">
                                        <div class="page-content settings container-fluid">
                                            <div id="media_picker_collection">
                                                <media-manager
                                                    base-path="/x/"
                                                    filename="{{ $options->rename ?? 'null' }}"
                                                    :allow-multi-select="{{ isset($options->max) && $options->max > 1 ? 'true' : 'false' }}"
                                                    :max-selected-files="{{ $options->max ?? 0 }}"
                                                    :min-selected-files="{{ $options->min ?? 0 }}"
                                                    :show-folders="{{ var_export($options->show_folders ?? false, true) }}"
                                                    :show-toolbar="{{ var_export($options->show_toolbar ?? true, true) }}"
                                                    :allow-upload="{{ var_export($options->allow_upload ?? true, true) }}"
                                                    :allow-move="{{ var_export($options->allow_move ?? false, true) }}"
                                                    :allow-delete="{{ var_export($options->allow_delete ?? true, true) }}"
                                                    :allow-create-folder="{{ var_export($options->allow_create_folder ?? true, true) }}"
                                                    :allow-rename="{{ var_export($options->allow_rename ?? true, true) }}"
                                                    :allow-crop="{{ var_export($options->allow_crop ?? true, true) }}"
                                                    :allowed-types="{{ isset($options->allowed) && is_array($options->allowed) ? json_encode($options->allowed) : '[]' }}"
                                                    :pre-select="false"
                                                    :expanded="false"
                                                    :show-expand-button="true"
                                                    {{-- :element="'input[name=&quot;{{ $row->field }}&quot;]'" --}}
                                                ></media-manager>
                                                {{-- <input type="hidden" :value="{{ $content }}" name="{{ $row->field }}"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @push('javascript')
                                    <script>
                                    new Vue({
                                        el: '#media_picker_collection'
                                    });
                                    </script>
                                    @endpush
                                    
                                
                            </form>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection