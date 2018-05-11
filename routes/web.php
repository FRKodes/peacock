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

Route::get('/','PagesController@index');
Route::get('quienes-somos','PagesController@quienes_somos');
Route::get('contacto','PagesController@contacto');
Route::get('conviertete-en-distribuidor','PagesController@distribuidor');
Route::get('ser-distribuidor','PagesController@distribuidor');
Route::get('red-de-distribucion','PagesController@puntos_dist');
Route::get('puntos-de-distribucion','PagesController@puntos_dist');
Route::get('bovinos','PagesController@bovinos');
Route::get('strepto-guard','PagesController@strepto_guard');
