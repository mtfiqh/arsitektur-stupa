@extends('voyager::master')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<section id="ekskul" class="ekskul bg-light pb-5">
      <div class="container-fluid">
            <div class="row mb-4 mt-4 pt-4">
                <div class="col text-center">
                <h3>Selamat Datang Di Dashboard</h3>
                </div>
            </div>

            <div class="row mb-5" style="margin-top:10px">
          <div class="col-md-2">
          </div>
        <div class="col-md-4">
                    <div class="card" style="16rem;">
                    <div class  = "text-center">
                        <img class="card-img-top rounded-circle img-thumbnail" src="{{asset('gambar/user.png')}}"  position="center"  alt="Card image" style="width:100%;" >
                            <div class="card-body px-2" align="left">
                            <h4 class="card-title text-center">Profil Mahasiswa</h4>
                                <p class="card-text text-center">Data Mahasiswa berisi informasi profil mahasiswa</p>
                            <a href="#" class="btn btn-primary center-block">Profile Mahasiswa</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-4">
                <div class="card"style="18rem;">
                    <div class  = "text-center">
                        <img class="card-img-top rounded-circle img-thumbnail" src="{{asset('gambar/task.png')}}" style="width:100%;"  >
                              <div class="card-body px-2" align="left">
                              <h4 class="card-title text-center">Informasi Tugas</h4>
                                <p class="card-text text-center">Informasi Tugas berisi tentang tugas yang tersedia</p>
                                <a href="{{route('timelinetugas')}}" class="btn btn-primary center-block">Informasi Tugas</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row mb-5" style="margin-top:10px">
          <div class="col-md-2">
          </div>
          <div class="col-md-8" style="">
            <div class  = "text-center">
                <div class="card" style="">
                        <img class="card-img-top rounded-circle img-thumbnail" src="{{asset('gambar/kelas.png')}}" style="width:50%;"  >
                              <div class="card-body px-2" align="left">
                                 <h4 class="card-title text-center">Kelas</h4>
                                <p class="card-text text-center">Data Kelas berisi informasi tentang kelas studio</p>
                            <a href="{{route('viewKelas')}}" class="btn btn-primary center-block">Data Kelas</a>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </section>
@endsection

