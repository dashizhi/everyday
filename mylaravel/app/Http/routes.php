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

Route::get('/test','TestController@index');

Route::get('admin/index', 'AdminController@index'); 
Route::post('admin/tianadd','AdminController@tianadd');
Route::get('admin/rizhi','AdminController@rizhi');
Route::post('admin/add','AdminController@add');

Route::get('ceshi', 'CeshiController@index');  
Route::post('add','CeshiController@add');
Route::get('say','CeshiController@say');
Route::get('doadd','CeshiController@doadd');
Route::get('show','CeshiController@show');
Route::get('deletes','CeshiController@deletes');
Route::get('updates','CeshiController@updates');
Route::get('doup','CeshiController@doup');

// Route::get('trst',function(){
// 	return 'get请求';
// });

// Route::any('trst',function(){
// 	return 'get请求';//任何请求都放过
// });

// Route::post('test',function(){
// 	return 'psot请求';
// });