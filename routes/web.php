<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});


Route::group(['prefix' => 'user'], function () {
    Voyager::routes();
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/enroll', 'RoomController@viewKelas')->name('viewKelas');



Route::get('user/timelinetugas', 'TaskController@indexTugas')->name('timelinetugas');
Route::get('user/timelinetugas/{id}/kumpul', 'CollectionController@kumpul')->name('tugas.kumpul');
Route::post('user/timelinetugas/{id}/kumpul', 'CollectionController@post')->name('tugas.post');
Route::delete('user/deleteFile/', 'CollectionController@deleteFile')->name('tugas.deletefile');

Route::get('user/enroll/{id}', 'RoomController@enrollview')->name('enroll.view');
Route::post('user/enroll/{id}', 'RoomController@enroll')->name('enroll');
Route::get('user/unenroll', 'RoomController@unenroll')->name('unenroll');

Route::group(['prefix' => 'user/semuaTugas'], function () {
    Route::get('', 'AdminController@viewAllRooms')->name('admin.tasks.rooms');
    Route::get('{id}', 'AdminController@viewAllTasks')->name('admin.tasks.tasks');
    Route::get('{id}/{id2}', 'AdminController@viewAllCollections')->name('admin.tasks.collections');
    Route::get('{id}/{id2}/{id3}', 'AdminController@viewCollection')->name('admin.tasks.collection');
});
Route::group(['prefix' => 'user/dosenLihatTugas'], function () {
    Route::get('', 'TeacherController@viewAllRooms')->name('dosen.tasks.rooms');
    Route::get('{id}', 'TeacherController@viewAllTasks')->name('dosen.tasks.tasks');
    Route::get('{id}/{id2}', 'TeacherController@viewAllCollections')->name('dosen.tasks.collections');
    Route::get('{id}/{id2}/{id3}', 'TeacherController@viewCollection')->name('dosen.tasks.collection');
});

Route::group(['prefix' => 'user/dosenLihatMahasiswa'], function () {
    Route::get('', 'TeacherController@viewAllRoomsMhs')->name('dosen.mahasiswa.rooms');
    Route::get('{id}', 'TeacherController@viewMahasiswaOfRoom')->name('dosen.mahasiswa.mahasiswa');
    Route::get('{id}/{id2}', 'TeacherController@viewAllCollections')->name('dosen.mahasiswa');
});