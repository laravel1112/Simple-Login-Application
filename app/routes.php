<?php
Route::pattern('id', '[0-9]+');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('user.auth.login');
});
Route::get('home', 			['as' => 'user.home',         'uses' => 'StoreController@home']);
Route::get('del/{id}', 		['as' => 'user.store.del',    'uses' => 'StoreController@del']);
Route::get('edit/{id}',		['as' => 'user.store.edit',	  'uses' => 'StoreController@edit']);
Route::post('doUpdate',		['as' => 'user.store.doUpdate','uses' => 'StoreController@doUpdate']);
Route::get('login',			['as' => 'user.auth.login',   'uses' => 'AuthController@login']);
Route::post('doLogin',      ['as' => 'user.auth.doLogin', 'uses' => 'AuthController@doLogin']);
Route::get('signup',        ['as' => 'user.auth.signup',  'uses' => 'AuthController@signup']);
Route::post('doSignup',     ['as' => 'user.auth.doSignup','uses' => 'AuthController@doSignup']);
Route::get('logOut',       ['as' => 'user.auth.logOut',  'uses' => 'AuthController@logOut']);
Route::post('',         ['as' => '',    'uses' => '']);
