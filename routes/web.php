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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@index');
Route::get('/competition', 'SiteController@competition');
Route::get('/enpf', 'SiteController@enpf');
Route::get('/information-message', 'SiteController@infoMessage');
Route::get('/inner-competition', 'SiteController@innerCompetition');
Route::get('/contacts', 'SiteController@contacts');