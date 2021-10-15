<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrayeksController;
use SimpleSoftwareIO\QrCode\Generator;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\FullTextSearchController;
use App\Http\Controlelrs\TrafficLightController;


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


// start route books
Route::get('books','BooksController@index');

Route::get('back','BooksController@back');

Route::get('create','BooksController@create');

Route::post('insert', 'BooksController@insert');

Route::get('delete/{id}','BooksController@delete');

Route::get('edit/{id}','BooksController@edit');

Route::post('update/{id}', 'BooksController@update');

Route::get('read/{id}','BooksController@read');
//end route books


// start route trayek
Route::get('trayeks','TrayeksController@index');
Route::get('tambah_trayek','TrayeksController@create');
Route::post('insert_trayek','TrayeksController@insert');
Route::get('show_trayek/{id}', 'TrayeksController@show');


//url untuk membuat qrcode url kendaraannya
Route::get('create_qrcode', [DataController::class, 'index']);
Route::post('create_qrcode', [DataController::class, 'store'])->name('store');
Route::get('qrcode/{id}', [DataController::class, 'generate'])->name('generate');

//scan qrcode
Route::get('qrcodetrackings', function(){
    return view('scan');
});


//route penumpangs
Route::post('insert_penumpang','PenumpangController@insert');
Route::get('penumpangs','PenumpangController@index');

Route::get('sukses','PenumpangController@succes');

//full text search
// Route::get('full-text-search', 'FullTextSearchController@search');


Route::get('traffic_lights', 'TrafficLightController@index');
Route::get('create_trafficlight','TrafficLightController@create');
Route::post('insert_trafficlight','TrafficLightController@store');
Route::get('show_trafficlight/{id}','TrafficLightController@show');

Route::get('pengaduan_trafficlights','PengaduanTrafficController@index');
Route::post('insert_pengaduantraffic', 'PengaduanTrafficController@insert');
Route::get('pengaduan_sukses','PengaduanTrafficController@succes');