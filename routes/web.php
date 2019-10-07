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

Route::get('/', 'BoolpressController@index')-> name('pressIndex');
Route::get('/categories/{category_id}' , 'BoolpressController@showPostsByCategory') -> name('pressShowPostsByCategory');
Route::get('/show/{id}' , 'BoolpressController@show') -> name('pressShowPost');
Route::get('/edit/{id}' , 'BoolpressController@edit') -> name('pressEditPost');
Route::post('/update/{id}' , 'BoolpressController@update') -> name('pressUpdatePost');
