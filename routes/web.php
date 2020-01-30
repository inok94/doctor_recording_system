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

Route::get('/services', 'ServiceController@index');
Route::get('/services/list', 'ServiceController@getServices');
Route::get('/service/{id}', function (){
    return view('doctorsForService');
});

Route::get('/schedule/{id}', 'DoctorController@getSchedule');

Route::get('/doctor-services/{id}', 'DoctorController@getServices');

Route::post('/record', 'UserController@getServices');

Route::get('/record/{id}', 'UserController@getServices');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
