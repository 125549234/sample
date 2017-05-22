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
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
get('signup','UserController@create')->name('signup');
//post('upload',array('UploadController@upw'))->name('upload');
Route::post('upload','UploadController@upw')->name('upload');

resource('users','UserController');


get('login','SessionController@create')->name('login');
post('login','SessionController@store')->name('login');
delete('logout','SessionController@delete')->name('logout');