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
Route::get('bacterin-2-doble-bovina','PagesController@bacterin_2_doble_bovina');
Route::get('bacterin-7-vias-clostri','PagesController@bacterin_7_vias_clostri');
Route::get('bacterin-pasteurelosis-p+h','PagesController@bacterin_pasteurelosis');
Route::get('bacterin-3-triple-bovina','PagesController@bacterin_3_triple_bovina');
Route::get('bacterin-11-vias-cpmh','PagesController@bacterin_11');
Route::get('bacterin-8-vias-cpm','PagesController@bacterin_8');
Route::get('strepto-guard','PagesController@strepto_guard');
