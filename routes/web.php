<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Admin
Route::group(['prefix' => 'admin'], function () {
	Route::get('/','AdminController@index');
	Route::get('/inputakun','AdminController@form_inputakun');
	Route::post('/inputakun','AdminController@inputakun');
	Route::get('/ubahakun','AdminController@table_ubahakun');
	Route::get('/inputprodi','AdminController@form_inputprodi');
	Route::post('/inputprodi','AdminController@inputprodi');
	Route::get('/inputkelas', 'AdminController@form_inputkelas');
	Route::post('/inputkelas','AdminController@inputkelas');
	Route::get('/inputgedung','AdminController@form_inputgedung');
	Route::post('/inputgedung','AdminController@inputgedung');
	Route::get('/inputruangan','AdminController@form_inputruangan');
	Route::post('/inputruangan','AdminController@inputruangan');
	Route::get('/inputmatakuliah','AdminController@form_inputmatakuliah');
	Route::get('/ubahkelas','AdminController@table_ubahkelas');
	Route::get('/ubahprodi','AdminController@table_ubahprodi');
	Route::post('/inputmatakuliah','AdminController@inputmatakuliah');
	Route::get('/ubahgedung','AdminController@table_ubahgedung');
	Route::get('/ubahruangan','AdminController@table_ubahruangan');
	Route::get('/ubahakun','AdminController@table_ubahakun');
	Route::get('/ubahmatakuliah','AdminController@table_ubahmatakuliah');
});

// Dosen
Route::group(['prefix' => 'dosen'], function () {
	Route::get('/','DosenController@index');
	Route::get('/registerasi/jadwaldosen','DosenController@jadwaldosen');
	Route::get('/nilai/inputnilai','DosenController@form_inputnilai');
	Route::get('/presensi/inputpresensi','DosenController@form_inputpresensi');

	Route::post('/pilihmahasiswa','DosenController@pilihmahasiswa');
	Route::post('/pilihkelas','DosenController@pilihkelas');
	Route::post('/pilihnilai','DosenController@pilihnilai');
	Route::post('/insertnilai','DosenController@insertnilai');
	Route::post('/presensi/inputpresensi','DosenController@inputpresensi');
	Route::get('/registerasi/printjadwaldosen','DosenController@print_jadwal');
});

// Mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/jadwal','MahasiswaController@jadwal_mahasiswa');
Route::get('/mahasiswa/lihatnilai','MahasiswaController@table_nilai');
Route::get('/mahasiswa/printnilai','MahasiswaController@print_nilai');
Route::get('/mahasiswa/lihatpresensi','MahasiswaController@table_presensi');
Route::get('mahasiswa/registerasi/printjadwalmahasiswa','MahasiswaController@print_jadwal');

// LAAK
Route::group(['prefix' => 'laak'], function () {
	Route::get('/','LaakController@index');
	Route::get('/inputjadwal','LaakController@form_inputjadwal');
	Route::post('/inputjadwal','LaakController@inputjadwal');
	Route::get('/datamahasiswa','LaakController@table_mahasiswa');
});

// Login
Route::get('/login','AkunController@login');
Route::get('/logout','AkunController@logout');
Route::post('/dologin','AkunController@dologin');