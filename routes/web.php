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
    return view('welcome')->with('title','Accueil');
});


Route::get('/piste', 'MusicController@index');
Route::get('/piste/recherche', 'MusicController@Pistesearch')->name('piste.search');
Route::get('/artist/recherche', 'MusicController@Artistsearch')->name('artist.search');
Route::get('/album/recherche', 'MusicController@Albumsearch')->name('album.search');
Route::get('/photo/recherche', 'PhotoController@search')->name('photo.search');
Route::get('/video/recherche', 'VideoController@search')->name('video.search');
Route::get('/piste/{rowId}', 'MusicController@player')->name('piste.play');
Route::get('/artist/{rowId}', 'MusicController@artistPlay')->name('artist.play');
Route::get('/album/{rowId}', 'MusicController@albumPlay')->name('album.play');
Route::get('/artiste', 'MusicController@artist');
Route::get('/album', 'MusicController@album');
Route::get('/photo', 'PhotoController@index');
Route::get('/video', 'VideoController@index');
Route::get('/video/{rowId}', 'VideoController@play')->name('video.play');
Route::get('/blog', 'BlogController@index');
Route::get('/contact', 'ContactController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
