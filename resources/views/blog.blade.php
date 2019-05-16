@extends('app.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="card mt-4">
                <div class="card-body">
                    <h1>{{$post->title}}</h1>
                    <hr />
                    <p>{!!$post->body!!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
