<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/piste', 'MusicController@index');
Route::get('/artiste', 'MusicController@artist');
Route::get('/album', 'MusicController@album');
Route::get('/photo', 'photoController@index');
Route::get('/video', 'videoController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contact', 'ContactController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});