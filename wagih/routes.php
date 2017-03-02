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
Route::get('/db/{{name}}/{{email}}','DatabaseController@get');
Route::get('/db/{{name}}','DatabaseController@index');
Route::post('db/{{name}}', array('uses'=>'DatabaseConroller@put'));
Route::get('/db/{{name}}/delete/{{email}}','DatabaseController@delete');