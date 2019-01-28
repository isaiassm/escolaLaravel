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

Route::get('/', 'EscolaController@lista');
Route::get('/alunos', 'EscolaController@lista');
Route::get('/alunos/form', 'EscolaController@form');

Route::post('/alunos/adiciona', 'EscolaController@adiciona');

Route::get('/alunos/remove/{id}', 'EscolaController@remove');

Route::get('/professores', 'ProfessorController@lista');
Route::get('/professores/form', 'ProfessorController@form');

Route::post('/professores/adiciona', 'ProfessorController@adiciona');

Route::get('/professores/remove/{id}', 'ProfessorController@remove');



Route::get('/turmas', 'TurmaController@lista');
Route::get('/turmas/form', 'TurmaController@form');

Route::post('/turmas/adiciona', 'TurmaController@adiciona');

Route::get('/turmas/remove/{id}', 'TurmaController@remove');



