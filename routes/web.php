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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/krit', 'Kriteria@index');
Route::get('/krit/edit/{id}', 'Kriteria@edit');
Route::post('/krit/update/{id}', 'Kriteria@update');

Route::get('/alternatif', 'AlternatifController@index');
Route::get('/alternatif/edit/{id}', 'AlternatifController@edit');
Route::post('/alternatif/update/{id}', 'AlternatifController@update');
Route::get('/alternatif/delete/{id}', 'AlternatifController@delete');
Route::get('/alternatif/add-form', 'AlternatifController@addForm');
Route::post('/alternatif/add', 'AlternatifController@store');
