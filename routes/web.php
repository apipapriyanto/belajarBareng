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

Route::get('/portofolio', function(){
  return view('/portofolio/portofolio');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
  return view('about');
});

Route::get('/galeri', function (){
  return view('galeri');
});

Route::get('/contact', function (){
  return view('contact');
});

Route::get('/login', function (){
  return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Add data
Route::get('/siswa', "SiswaController@index");
Route::get('/siswa/add', "SiswaController@add");
Route::post('/siswa', "SiswaController@create");

// Update data
Route::get('/siswa/{id}/edit', "SiswaController@edit");
Route::post('/siswa/{id}/update', "SiswaController@update");

// Delete data
Route::get('/siswa/{id}/delete', "SiswaController@delete");
