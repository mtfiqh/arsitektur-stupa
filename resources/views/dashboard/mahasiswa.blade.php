@extends('voyager::master')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<section id="ekskul" class="ekskul bg-light pb-5">
      <div class="container-fluid">
            <div class="row mb-4 mt-4 pt-4">
                <div class="col text-center">
                <h4>Selamat Datang Mahasiswa</h4>
                </div>
            </div>


        <div class="col-mb-5" style="margin-top:20px">
            <div class="col-md-3">
                    <div class="card px-2" style="width: 230px; margin-left:1px;">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/user2.png"  position="center"  alt="Card image" style="width:100%;" >
                            <div class="card-body">
                            <h4 class="card-title">Data Mahasiswa</h4>
                                <p class="card-text">Data Mahasiswa berisi informasi profil mahasiswa</p>
                            <a href="#" class="btn btn-primary">Data Profil</a>
                        </div>
                              <!-- <a href="Musik.html" class="card-link" style="font-size:20px;">data user</a> -->
                            
                          </div>
            </div>

            <div class="col-md-3">
                    <div class="card px-2" style="width: 230px; ">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/kelas.png" style="width:100%;"  >
                              <!-- <a href="Pramuka.html" class="card-link"  style="font-size:20px;">Kelas</a> -->
                              <div class="card-body">
                              <h4 class="card-title">Informasi Tugas</h4>
                                <p class="card-text">Informasi Tugas berisi tentang tugas yang tersedia</p>
                                <a href="#" class="btn btn-primary">Informasi Tugas</a>
                        </div>
                    </div>
            </div>

            <div class="col-md-3">
                    <div class="card" style="width: 230px; ">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/kelas.png" style="width:100%;"  >
                              <!-- <a href="Pramuka.html" class="card-link"  style="font-size:20px;">Kelas</a> -->
                              <div class="card-body">
                            <h4 class="card-title">Data Kelas</h4>
                                <p class="card-text">Data Kelas berisi informasi tentang kelas studio</p>
                            <a href="{{route('viewKelas')}}" class="btn btn-primary">Data Kelas</a>
                        </div>
                    </div>
            </div>
        
            </div>
        </div>
    </section>
@endsection
