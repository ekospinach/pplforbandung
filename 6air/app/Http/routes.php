<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('perizinanair/detailperizinanuser/{id}', 'PerizinanAirController@detailperizinanuser');
Route::get('perizinanair/download/{id}', 'PerizinanAirController@downloadPdf');
Route::get('perizinanair/cancel/{id}/{status}', 'PerizinanAirController@cancelPerizinan');
Route::get('perizinanair/ubahstatus/{id}/{status}', 'PerizinanAirController@ubahstatus');
Route::get('perizinanair/perpanjangperizinan/{id}', 'PerizinanAirController@perpanjangperizinan');
Route::get('perizinanair/keberatanperizinan/{id}', 'PerizinanAirController@keberatanperizinan');
Route::get('perizinanair/ubahperizinan/{id}', 'PerizinanAirController@ubahperizinan');
Route::get('perizinanair/markpengaduan/{id}', 'PerizinanAirController@markpengaduan');
Route::get('perizinanair/approveizin/{id}/{status}', 'PerizinanAirController@approveizin');
Route::get('perizinanair/renewizin/{id}/{status}', 'PerizinanAirController@renewizin');
Route::get('perizinanair/ubahizin/{id}/{status}', 'PerizinanAirController@ubahizin');
Route::get('perizinanair/detilperizinandinas/{id}', 'PerizinanAirController@detilperizinandinas');



Route::controllers([
	'perizinanair' => 'PerizinanAirController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'pengaduan' => 'PengaduanController',
	'umum' => 'MasyarakatController'
]);
