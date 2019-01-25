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

Route::get('/alunos', 'EscolaController@lista');
Route::get('/alunos/form', 'EscolaController@form');

Route::post('/alunos/adiciona', 'EscolaController@adiciona');

Route::get('/alunos/remove/{id}', 'EscolaController@remove');


Route::get('/', function () {
    return view('welcome');
});
