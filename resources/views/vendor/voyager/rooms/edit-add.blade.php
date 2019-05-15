@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{ asset('yearpicker/yearpicker.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="nama">{{ __('Nama Kelas') }}</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="{{ __('Nama Kelas') }}"
                                       value="{{ $dataTypeContent->nama ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="tahun">{{ __('Tahun Ajaran') }}</label>
                                <input type="number" class="yearpicker form-control" id="tahun" name="tahun" placeholder="{{ __('Tahun Ajaran') }}"
                                       value="{{ $dataTypeContent->tahun ?? '' }}" readonly required>
                            </div>

                            <div class="form-group">
                                    <label for="smester">{{ __('Smester') }}</label>
                                    <input type="number" class="form-control" id="smester" name="smester" placeholder="{{ __('Smester Kelas') }}"
                                           value="{{ $dataTypeContent->smester ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                    <label for="password">{{ __('password') }}</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="{{ __('password Kelas') }}"
                                           value="{{ $dataTypeContent->password ?? '' }}">
                            </div>

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script src="{{ asset('yearpicker/yearpicker.js') }}" async></script>

    <script>
        $('.yearpicker').yearpicker({

            // Auto Hide
            autoHide: true,

            // Initial Year
            year: null,

            // Start Year
            startYear: null,

            // End Year
            endYear: null,

            // Element tag
            itemTag: 'li',

            // Default CSS classes
            selectedClass: 'selected',
            disabledClass: 'disabled',
            hideClass: 'hide',
            highlightedClass: 'highlighted',

            // Custom template
            template: `<div class="yearpicker-container">
                        <div class="yearpicker-header">
                            <div class="yearpicker-prev" data-view="yearpicker-prev">&lsaquo;</div>
                            <div class="yearpicker-current" data-view="yearpicker-current">SelectedYear</div>
                            <div class="yearpicker-next" data-view="yearpicker-next">&rsaquo;</div>
                        </div>
                        <div class="yearpicker-body">
                            <ul class="yearpicker-year" data-view="years">
                            </ul>
                        </div>
                    </div>
            `,

            });
    </script>
@stop
