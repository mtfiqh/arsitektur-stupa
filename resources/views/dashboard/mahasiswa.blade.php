@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


      <div class="container-fluid">
            <div class="row mb-4 mt-4 pt-4">
                <div class="col text-center">
                <h1> Dashboard Mahasiswa </h1>
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
