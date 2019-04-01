@extends('voyager::master')

@section('content')
<style type="text/css">
        .my-custom-scrollbar { position: relative; height: 400px; overflow: auto; overflow-y: scroll; }
        .my-custom-scrollbar::-webkit-scrollbar { background-color:#fff; width:13px; }
        .my-custom-scrollbar::-webkit-scrollbar-track { background-color:#fff; }
        .my-custom-scrollbar::-webkit-scrollbar-track:hover { background-color:#fff; }
        .my-custom-scrollbar::-webkit-scrollbar-thumb { background-color:#babac0; border-radius:16px; border:5px solid #fff; }
        .my-custom-scrollbar::-webkit-scrollbar-thumb:hover { background-color:#a0a0a5; border:4px solid #fff; }
        .my-custom-scrollbar::-webkit-scrollbar-button {display:none}
    </style>
<div class="col-md-12">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                        <div class="container">
                            <h3>Daftar Kelas Studio Perencanaan Arsitektur</h3>
                            <h3>Institut Teknologi Sumatera</h3>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">            
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Enroll</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Studio Perencanaan (RA)</td>
                                    <td>3</td>
                                    <td>2017</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                <td>Studio Perencanaan (RB)</td>
                                    <td>3</td>
                                    <td>2017</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RC)</td>
                                    <td>3</td>
                                    <td>2017</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RA)</td>
                                    <td>4</td>
                                    <td>2018</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RB)</td>
                                    <td>4</td>
                                    <td>2018</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RC)</td>
                                    <td>4</td>
                                    <td>2018</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RA)</td>
                                    <td>5</td>
                                    <td>2019</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RB)</td>
                                    <td>5</td>
                                    <td>2019</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                <tr>
                                    <td>Studio Perencanaan (RC)</td>
                                    <td>5</td>
                                    <td>2019</td>
                                    <td> <button type="button" class="btn btn-primary">Enroll</button></td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div> 
@endsection
