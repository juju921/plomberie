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
Route::post('/users','UsersController@store');
Route::get('/inovoices/create/{id}','InovoicesController@store');


//User
Route::get('/users/create','UsersController@create');
Route::post('/users','UsersController@store');
Route::get('/users/index', 'UsersController@index');
Route::get('/users/userschoice','UsersController@choise');


//Clients
Route::get('/clients/create','UsersController@create');
Route::post('/clients','UsersController@store');
Route::get('/clients/index', 'UsersController@index');
Route::get('/clients/userschoice','UsersController@choise');

//Api
//Route::get('/','Api\SearchController@search');
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/redirect', 'RegisterController@redirect');
Route::get('/callback', 'RegisterController@callback');


//Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
