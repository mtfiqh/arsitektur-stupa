{{--
<link rel="stylesheet" href="{{ url('/assets/css/normalize.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/grid.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/plugin/font-awesome/css/font-awesome.css') }}" media="screen"> --}}
<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

@extends('app.app')

@section('additional-css')

<!-- <link rel="stylesheet" href="{{ url('/assets/css/grid.css') }}" media="screen"> -->
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/plugin/font-awesome/css/font-awesome.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/css/normalize.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/css/style.css') }}" media="screen">
@endsection



@section('content')

<div class="slide" id="slide1" data-slide="7" data-stellar-background-ratio="0.5" >
    <div class="container clearfix">
        <center>
            <div id="content" class="grid_12">
                <h1>Sistem Informasi Studio Perencanaan</h1>
                <h1>Arsitektur</h1>
                <h1>Institut Teknologi Sumatera</h1>
            </div>
        </center>
    </div>
</div>


@if(Auth::check())
<div class="slide" id="blogs" data-slide="2" data-stellar-background-ratio="0.5">
    <div class="container clearfix">

        <h2>Blogs</h2>
        <p class="heading"></p>
        <div class="container">
			<ul class="content-columns">
                @foreach ($posts as $post)
				<li>
					<article class="boxed">
						 <img src="{{Storage::url($post->image)}}" alt="">
						 <div class="description">
                            <h1><a href="{{route('blog',$post->id)}}">{{$post->title}}</a></h1>
						 	<p> {{$post->meta_description}} </p>
						 </div>
					</article>
				</li>
                @endforeach


            </ul>
            <center>{{$posts->Links()}}</center>
		</div>
    </div>
</div>
@endif
<!-- <div class="slide" id="contact" data-slide="3" data-stellar-background-ratio="0.5">
    <div class="container clearfix">

        <h2>About</h2>
        <p class="heading"></p>
        <div>
            <div class="grid_0 omega">
                <p></p>
                <p></p>
            </div>
        </div>

    </div>
</div> -->


<footer>
    <div class="container clearfix">
        <center>
            <li style="font-size: 15px; font-family: inherit; letter-spacing: 0px;">Develop By Teknik Informatika</li>
        </center>
    </div>
</footer>
@endsection

@section('additional-js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="{{ url('/assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('/assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('/assets/js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/scripts.min.js') }}"></script>
@endsection
