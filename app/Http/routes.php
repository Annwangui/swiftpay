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

Route::get('/', function () {
   return view('welcome');
});
Route::get('/index', function (){
     return view('index');
});
 //Route::get('/form', function(){
     //return view('form');
//});
Route::get('index', 
  ['as' => 'index', 'uses' => 'SwiftController@create']);

Route::post('index', 
  ['as' => 'index_store', 'uses' => 'SwiftController@store']);


