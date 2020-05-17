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

// Route::get('/', function () {
//     return view('Mobil');
// });
Route::get('/Mobil', 'MobilController@index');
Route::get('/Mobil/tambah', 'MobilController@tambah');
Route::post('/Mobil/add', 'MobilController@add');
Route::get('/Mobil/delete/{id}', 'MobilController@delete');
Route::get('/Mobil/update/{id}', 'MobilController@update');
Route::post('/Mobil/u_process/{id}', 'MobilController@u_process');

Route::get('/type','TypeController@index');
Route::get('/type/tambah','TypeController@tambah');
Route::post('/type/add','TypeController@add');
Route::get('/type/delete/{id}','TypeController@delete');
Route::get('/type/update/{id}', 'TypeController@update');
Route::post('/type/u_process/{id}', 'TypeController@u_process');