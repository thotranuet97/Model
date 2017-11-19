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
Route::get('createarticle','Articles@index');

Route::post('savearticle','Articles@Store');

Route::get('showarticle','Articles@show');

Route::post('saveflight','FlightController@Store');

Route::get('showflight','FlightController@show');

Route::get('createstudent','Students@index');

Route::post('savestudent','Students@Store');

Route::get('showstudent','Students@show');