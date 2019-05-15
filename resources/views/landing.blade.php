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
<link rel="stylesheet" href="{{ url('/assets/css/normalize.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/grid.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}" media="screen">
<link rel="stylesheet" href="{{ url('/assets/plugin/font-awesome/css/font-awesome.css') }}" media="screen">
@endsection

@section('nav-landing')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#blogs">Informations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">About</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>

@endsection


@section('content')

<div class="slide" id="slide1" data-slide="7" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        <center>
            <div id="content" class="grid_12">
                <h1>Sistem Informasi Studio Perencanaan</h1>
                <h1>Arsitektur</h1>
                <h2>Institut Teknologi Sumatera</h2>
            </div>
        </center>
    </div>
</div>



<div class="slide" id="blogs" data-slide="2" data-stellar-background-ratio="0.5">
    <div class="container clearfix">

        <h2>Informations</h2>
        <p class="heading"></p>
    </div>
</div>

<div class="slide" id="contact" data-slide="3" data-stellar-background-ratio="0.5">
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
</div>


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
