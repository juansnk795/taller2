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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie','MovieController');
Route::get('movie/destroy/{id}', ['as'=>'movie/destroy','uses'=> 'MovieController@destroy']);
Route::post('movie/show', ['as'=>'movie/show','uses'=> 'MovieController@show']);
Route::post('movie/update/{id}', ['as'=>'movie/update','uses'=> 'MovieController@update']);
