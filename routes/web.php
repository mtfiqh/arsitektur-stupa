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

Route::get('user/viewKelas', 'RoomController@viewKelas')->name('viewKelas');

Route::get('user/enroll/{id}', 'RoomController@enrollview')->name('enroll.view');
Route::post('user/enroll/{id}', 'RoomController@enroll')->name('enroll');
Route::get('user/unenroll', 'RoomController@unenroll')->name('unenroll');

