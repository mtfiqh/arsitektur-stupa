@extends('voyager::master')

@section('content')
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="card-head">
                <h2>Enroll ke kelas {{$kelas->display_name}}</h2>
            </div>
            <div class="card-body">
                <form action="{{route('enroll',$id)}}" method="POST">
                    @method("POST")
                    @CSRF
                    <label for="password">Password Enroll :</label>
                    <input type="password" class="form-control" placeholder="Kosongkan apabila kelas tidak ada password" name="password">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Enroll Now</button>
                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@stop
