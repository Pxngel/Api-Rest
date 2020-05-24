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


Route::post('/user/register', 'UserController@register')->middleware('cors');
Route::post('/contacto/register', 'ContactoController@register')->middleware('cors');
Route::post('/division/register', 'DivisionController@register')->middleware('cors');
Route::post('/user/login', 'UserController@login')->middleware('cors');
Route::put('/user/update','UserController@update')->middleware('cors');
Route::get('/division/{id}','DivisionController@getOne')->middleware('cors');
Route::get('/division','DivisionController@getAll')->middleware('cors');
Route::get('/pe/{id}','ProgramasEduUGController@getOne')->middleware('cors');
Route::get('/pe/division/{id}','ProgramasEduUGController@getByDiv')->middleware('cors');
Route::get('/pe/{division}/{id}','ProgramasEduUGController@getByIds')->middleware('cors');
Route::get('/pe','ProgramasEduUGController@getAll')->middleware('cors');
Route::get('/user','UserController@getAll')->middleware('cors');
Route::get('/contacto','UserController@getAll')->middleware('cors');
Route::post('/user/upload','UserController@getAll')->middleware('cors');
