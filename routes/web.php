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
Route::get('caninos','PagesController@caninos');
Route::get('caprinos','PagesController@caprinos');
Route::get('equinos','PagesController@equinos');
Route::get('ovinos','PagesController@ovinos');
Route::get('felinos','PagesController@felinos');
Route::get('aves','PagesController@aves');
Route::get('porcinos','PagesController@porcinos');
Route::get('bacteriologicos','PagesController@bacteriologicos');
Route::get('virologicos','PagesController@virologicos');
Route::get('desparacitantes','PagesController@desparacitantes');
Route::get('anti-microbianos','PagesController@anti_microbianos');
Route::get('vitaminicos','PagesController@vitaminicos');
Route::get('bacterin-2-doble-bovina','PagesController@bacterin_2_doble_bovina');
Route::get('bacterin-7-vias-clostri','PagesController@bacterin_7_vias_clostri');
Route::get('bacterin-pasteurelosis-p+h','PagesController@bacterin_pasteurelosis');
Route::get('bacterin-3-triple-bovina','PagesController@bacterin_3_triple_bovina');
Route::get('bacterin-11-vias-cpmh','PagesController@bacterin_11');
Route::get('bacterin-8-vias-cpm','PagesController@bacterin_8');
Route::get('dectomaster-1-prolong','PagesController@dectomaster_1_prolong');
Route::get('dectomaster-3_15','PagesController@dectomaster_3_15');
Route::get('dectomaster-ad3e-la','PagesController@dectomaster_ad3e_la');
Route::get('dectomaster-eqpasta','PagesController@dectomaster_eqpasta');
Route::get('derrienlytic','PagesController@derrienlytic');
Route::get('vaccine-antrax','PagesController@vaccine_antrax');
Route::get('vaccine-triple-aviar','PagesController@vaccine_triple_aviar');
Route::get('vaccine-triple-aviar-curativa','PagesController@vaccine_triple_aviar_curativa');
Route::get('strepto-guard','PagesController@strepto_guard');