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
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/user.png" alt="Card image" style="width:100%">
                            <div class="card-body"><h3></h3>
                            <h4 class="card-title text-center">List Mahasiswa</h4>
                                <p class="card-text text-center">List Mahasiswa berisi informasi siswa yang terdaftar dimasing masing kelas</p>
                            <a href="#" class="btn btn-primary center-block">List Mahasiswa</a>
                            </div>
                          </div>
            </div>

            <div class="col-md-4">
                    <div class="card"style="18rem;">
                        <img class="card-img-top rounded-circle img-thumbnail" src="gambar/kelas.png" style="width:100%" >
                            <div class="card-body"><h3></h3>
                            <h4 class="card-title text-center">Kelas</h4>
                                <p class="card-text text-center">Kelas berisi informasi kelas yang terdaftar di Matakuliah STUPA</p>
                            <a href="#" class="btn btn-primary center-block">Kelas</a>
                            </div>
                          </div>
            </div>

            <div class="col-md-4">
                <div class="card"style="18rem;">
                    <img class="card-img-top rounded-circle img-thumbnail" src="gambar/task.png" style="width:100%">
                        <div class="card-body"><h3></h3>
                        <h4 class="card-title text-center">Daftar Pengumpulan</h4>
                                <p class="card-text text-center">Melihat semua tugas yang sudah dikumpulkan</p>
                            <a href="#" class="btn btn-primary center-block">Lihat</a>
                        </div>
                      </div>
            </div>
        </div>

        </div>

@endsection
