@extends('voyager::master')

@section('content')


{{-- jika belum enroll kelas --}}
@if(Auth::User()->room_id==null)
<style type="text/css">
    .my-custom-scrollbar {
        position: relative;
        height: 400px;
        overflow: auto;
        overflow-y: scroll;
    }

    .my-custom-scrollbar::-webkit-scrollbar {
        background-color: #fff;
        width: 13px;
    }

    .my-custom-scrollbar::-webkit-scrollbar-track {
        background-color: #fff;
    }

    .my-custom-scrollbar::-webkit-scrollbar-track:hover {
        background-color: #fff;
    }

    .my-custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #babac0;
        border-radius: 16px;
        border: 5px solid #fff;
    }

    .my-custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background-color: #a0a0a5;
        border: 4px solid #fff;
    }

    .my-custom-scrollbar::-webkit-scrollbar-button {
        display: none
    }

</style>
<div class="col-md-12">
    <div class="panel panel-bordered">
        <div class="panel-body">
            <div class="container">
                <h3>Daftar Kelas Studio Perencanaan Arsitektur</h3>
                <h3>Institut Teknologi Sumatera</h3>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Kelas</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Enroll</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $kelas)
                            <tr>
                                <td>Studio Perencanaan ({{$kelas->nama}})</td>
                                <td>{{$kelas->smester}}</td>
                                <td>{{$kelas->tahun}}</td>
                                <td> <a href="{{route('enroll.view', $kelas->id)}}"><button type="button" class="btn btn-info btn-lg" >Enroll</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@else
{{-- jika sudah enroll kelas --}}
<div class="container-fluid">
    {{-- header informasi kelas dan un-enroll --}}
    <div class="row">
        <div class="col-md-6">
            <h2>Kamu berada di kelas <b>{{Auth::user()->room->display_name}}</b></h2>
        </div>
        <div class="col-md-6">
            <h2><a href="{{route('unenroll')}}"><button class="btn btn-block btn-danger btn-sm">Un-enroll</button></a></h2>
        </div>
    </div>

    {{-- penampilan list tugas yang bisa di kumpul oleh mahasiswa --}}
    @php
        // get waktu sekarang
        $timeNow=Carbon\Carbon::now();
    @endphp

    @foreach($datas as $data)
    <div class="row">
        <div class="col-md-12">
            <div class="card col-md-12">
                <div class="card-header">
                    <h4>{{$data->title}}</h4>

                </div>
                <div class="card-body">
                    {!! $data->description !!}
                </div>

                <div class="card-footer {{$timeNow < $data->deadline ? 'bg-warning' : 'bg-danger' }}">
                    @if($timeNow < $data->deadline)
                        Tersisa
                    @else
                        Telah terlewat
                    @endif
                    {{$timeNow->diff(new DateTime($data->deadline))->format('%Y Tahun, %m Bulan, %d Hari %H jam %I menit %S detik')}}

                </div>
            </div>
        </div>

    </div>
    @endforeach



</div>

@endif
@endsection
