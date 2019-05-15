@extends('voyager::master')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@if(Auth::User()->room_id==null)
    <div class="col-md-12 alert alert-warning container-fluid row">
        <div class="col-md-12">
            <h3>Kamu belum melakukan enroll kelas</h3>
            <a href="{{route('viewKelas')}}" class="btn btn-primary btn-sm">Enroll sekarang!</a>
        </div>
    </div>

@else

<section id="ekskul" class="ekskul bg-light pb-5">
    <div class="container-fluid">
        <div class="row mb-4 mt-4 pt-4">
            <div class="col text-center">
                <h3>Timeline Pengumpulan Tugas</h3>
            </div>
        </div>

        <div class="col-mb-12" style="margin-top:20px" align="center">
            <div class="col-md-12">
                <div class="card" style="width: 100%; margin-left:1px; border: 1px solid #dddddd; border-radius: 5px;">
                    <div class="card-body" align="left">

                        <ul class="list-group">
                            <li class="list-group-item disabled">Course Overview</li>

                            {{-- start looping --}}
                            @foreach($data as $tugas)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8 col-lg-6 col-xl-5">
                                        <div class="d-inline-block icon-large event-icon" style="margin-top:10px;">
                                            <img class="icon "
                                                src="http://kuliah.itera.ac.id/theme/image.php/boost/assign/1539680338/icon"
                                                alt="Activity event" title="Activity event">
                                            <a class="event-name" href="{{route('tugas.kumpul', $tugas->id)}}">{{$tugas->title}}</a>
                                            @foreach($tugas->rooms as $room)
                                            <p class="small text-muted text-truncate m-b-0" style="margin-top:10px;">
                                                {{$room->display_name}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                        <div class="row">
                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate"
                                                style="margin-top:10px;">
                                                <p>Deadline:</p>
                                                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tugas->deadline)->format('d M Y, H:i')}}

                                                @php
                                                    $collection = \App\Collection::where('task_id', $tugas->id)->where('user_id', Auth::user()->id)->first();
                                                    if($collection){
                                                        if($collection->done){
                                                            Carbon\Carbon::setLocale('id');
                                                            // $diffDalamDetik=Carbon\Carbon::parse($tugas->deadline)->diffInSeconds(Carbon\Carbon::parse($collection->updated_at));
                                                            $diff= $collection->updated_at->diffForHumans($tugas->deadline);
                                                        }
                                                    }
                                                @endphp

                                                @if($collection && $collection->done==true)
                                                    <div class="alert alert-sm alert-{{$tugas->deadline<$collection->updated_at ? 'danger' : 'success'}}">{{$diff}}</div>
                                                @endif
                                        </div>
                                            <div class="text-lg-left col-lg-5 text-truncate " style="margin-top:5px;">
                                            @if(!$tugas->status || ($tugas->close_after_deadline && \Carbon\Carbon::now() > $tugas->deadline))
                                                <a class="btn btn-warning" href="{{route('tugas.kumpul', $tugas->id)}}">View Submission</a>                                                
                                            @else
                                                <a class="btn btn-primary" href="{{route('tugas.kumpul', $tugas->id)}}">{{$collection && $collection->done ? 'Edit Submission' : 'Add submission'}}</a>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>


                    </div>
                </div>
            </div>
        </div>
</section>
@endif
@endsection
