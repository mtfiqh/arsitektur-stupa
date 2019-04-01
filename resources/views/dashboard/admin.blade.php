@extends('voyager::master')

@section('content')
<div class="container">
    
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
              <img class="card-img-top rounded-circle img-thumbnail" src="{{asset('gambar/basket.jpg')}}" >
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
    </div>
@stop


