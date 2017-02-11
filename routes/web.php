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

Route::get('/home', 'HomeController@index');

//Inovoices
Route::get('manage-inovoices', 'InovoicesController@manageinovoices');
Route::resource('inovoices', 'InovoicesController');

Route::resource('/inovoices/create','InovoicesController@create');


//User
Route::get('/users/create','UsersController@create');
Route::post('/users','UsersController@store');
Route::resource('users','UsersController');


//Api
Route::get('/','Api\SearchController@search');