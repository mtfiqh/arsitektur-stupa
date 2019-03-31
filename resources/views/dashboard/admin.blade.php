@extends('voyager::master')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>STUPA ITERA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Dashboard</a>
      <span class="tul">Admin</span>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Log out <span class="sr-only">(current)</span></a
            >
          </li>
        </ul>
      </div>
    </nav>
    
      <div class="row mb-5">

        <div class="col-md">
            <div class="card"style="18rem;">
                <img class="card-img-top rounded-circle img-thumbnail" src="gambar/ec.jpg" >
                    <div class="card-body"><h3>ENGLISH CLUB</h3>
                      <p class="card-text">English club adalah sebuah lembaga, tempat berkumpul dan belajar bersama untuk mengerti dan memahami cara berbicara dalam bahasa inggris. English Club SMA Tentang Rindu dibentuk pada tahun 2010. </p>
                      <a href="EC.html" class="card-link">Read More</a>
                    </div>
                  </div>
        </div>

        <div class="col-md">
          <div class="card"style="18rem;">
              <img class="card-img-top rounded-circle img-thumbnail" src="gambar/silat.jpg" >
                  <div class="card-body"><h3>PENCAK SILAT</h3>
                    <p class="card-text">Ekstrakulikuler Pencak Silat yang telah berdiri sejak 2017 yang dilatih oleh Kevin yang mana menangani sejak ekskul ini dibentuk.</p>
                    <a href="Silat.html" class="card-link">Read More</a>
                  </div>
                </div>
      </div>

      <div class="col-md">
          <div class="card"style="18rem;">
              <img class="card-img-top rounded-circle img-thumbnail" src="gambar/basket.jpg" >
                  <div class="card-body"><h3>BASKET</h3>
                    <p class="card-text">Tim basket SMA Tentang Rindu sudah ada sejak tahun 2001. Tim Basket SMA Tentang Rindu dilatih oleh Bobby untuk tim putra dan Tanti untuk tim putri.</p>
                    <a href="Basket.html" class="card-link">Read More</a>
                  </div>
                </div>
      </div>
  </div>
        </div>
      </div>
    </div>
  </body>
</html>

@stop


