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
//     return view('welcome');
// });

Route::get('/index','HalamanController@utama');

Route::get('/','HalamanController@index');
Route::get('/biodata','HalamanController@biodata');

Route::get('/form','HalamanController@form');
Route::post('/form/proses','HalamanController@hasil_request');

Route::get('/edit/{id}','HalamanController@edit');
Route::patch('/edit/proses','HalamanController@update');

Route::delete('/hapus/data/{id}','HalamanController@hapus');