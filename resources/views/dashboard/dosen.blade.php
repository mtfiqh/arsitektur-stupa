@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


      <div class="container-fluid">
            <div class="row mb-4 mt-4 pt-4">
                <div class="col text-center">
                <h1> Dashboard Dosen </h1>
                </div>
            </div>


        <div class="row mb-5" style="margin-top:10px">

            <div class="col-md-4">
                    <div class="card" style="16rem;">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/user2.png" alt="Card image" style="width:100%">
                            <div class="card-body"><h3></h3>
                              <p class="card-text" > </p>
                              <a href="Musik.html" class="card-link" style="font-size:30px;">User</a>
                            </div>
                          </div>
            </div>

            <div class="col-md-4">
                    <div class="card"style="18rem;">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/kelas.png" style="width:100%" >
                            <div class="card-body"><h3></h3>
                              <p class="card-text"></p>
                              <a href="Pramuka.html" class="card-link"  style="font-size:30px;">Kelas</a>
                            </div>
                          </div>
            </div>

            <div class="col-md-4">
                <div class="card"style="18rem;">
                    <img class="card-img-top rounded-circle img-thumbnail" src="gambar/media.png" style="width:100%">
                        <div class="card-body"><h3></h3>
                          <p class="card-text-center"></p>
                          <a href="Futsal.html" class="card-link" style="font-size:30px;">Media</a>
                        </div>
                      </div>
            </div>
        </div>

        </div>

@endsection
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
    <img
      src="img/gg.png"
      width="32%"
      style="margin-left: 17.5%; margin-top: 30px"
    />
    <img
      src="img/jj.png"
      width="32%"
      style="margin-left: 10px; margin-top: 30px"
    />
  </body>
</html>