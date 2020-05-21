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
Route::post('/contacto/register', 'ContactoController@register');
Route::post('/user/login', 'UserController@login');
Route::put('/user/update','UserController@update');
Route::get('/division/{id}','DivisionController@getOne');
Route::get('/division','DivisionController@getAll');
Route::get('/pe/{id}','ProgramasEduUGController@getOne');
Route::get('/pe/division/{id}','ProgramasEduUGController@getByDiv');
Route::get('/pe/{division}/{id}','ProgramasEduUGController@getByIds');
Route::get('/pe','ProgramasEduUGController@getAll');
Route::get('/user','UserController@getAll');
Route::get('/contacto','UserController@getAll');
