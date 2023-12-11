<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('halo', function () {
    return view('test');
});

Route::get('linktree', function () {
    return view('/TugasLinktree/linktree');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');
Route::get('/employee/{nama}', 'App\Http\Controllers\DosenController@index');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');



//EAS TAHUN LALU BOY
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index2');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiController@tambah2');
Route::post('/nilaikuliah/store2','App\Http\Controllers\NilaiController@store2');

Route::get('/sepedamotor','App\Http\Controllers\SepedamotorController@index3');
Route::get('/sepedamotor/tambah3','App\Http\Controllers\SepedamotorController@tambah3');
Route::post('/sepedamotor/store3','App\Http\Controllers\SepedamotorController@store3');


Route::get('/kategori','App\Http\Controllers\KategoriController@index4');
Route::post('/submitKategori','App\Http\Controllers\KategoriController@submitKategori');

