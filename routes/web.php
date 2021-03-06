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


Route::get('/','homecontroller@home');

Route::get('barang','BarangController@index');


//shop//
Route::get('shop','controllerShop@index');
Route::post('/getdata', 'controllerShop@getdata')->name('getdata');
Route::get('alkeb','controllerShop@alkeb');
Route::get('listrik','controllerShop@listrik');
Route::get('kimia','controllerShop@kimia');
Route::get('ATK','controllerShop@ATK');
Route::get('BHP','controllerShop@BHP');
Route::get('alkes','controllerShop@alkes');

// Route::get('/detail/{kd_barang}','controllerShop@detail');
Route::get('shop/{kd_barang}','controllerShop@detail');
Route::get('shop/{nama_barang}','controllerShop@cari');
// Route::get('/modal/{kd_barang}','controllerSop@show');
Route::get('checkout','controllerShop@checkout');
Route::get('wishlist','controllerShop@wishlist');
Route::get('chart','controllerShop@chart');
//--//

Route::get('about','pagecontroller@about');

Route::get('experience','controllerExperience@experience');
Route::get('detail','controllerExperience@detail');

Route::get('contact','pagecontroller@contact');


Route::get('partner','pagecontroller@partner');


// Route::get('about', 'pagecontroller@about');

Route::get('asal','pagecontroller@asal');

Route::get('myacc','AccountController@index');
Route::get('login','AccountController@login');
Route::get('register','AccountController@register');






