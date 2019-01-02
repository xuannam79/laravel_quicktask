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

Route::get('/tasks',[
	'uses' => 'TaskController@index',
	'as' => 'tasks.index'
]);
Route::post('/tasks',[
	'uses' => 'TaskController@store',
	'as' => 'tasks.index'
]);
Route::delete('/tasks/{id}',[
	'uses' => 'TaskController@destroy',
	'as' => 'tasks.delete'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
