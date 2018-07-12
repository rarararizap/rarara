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
Route::get('/', 'BokeController@index')->name('boke.index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);

    Route::get('odais', 'OdaiController@index')->name('odai.index');
  
    Route::group(['prefix' => 'bokes/{id}'], function () {
        Route::post('favorite', 'UserFavoriteController@store')->name('user.favorite');
        Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');    
        
    });

    Route::resource('bokes', 'BokeController', ['only' => ['store', 'destroy']]);
    Route::get('bokes/create/{id}', 'BokeController@create')->name('bokes.create'); 
  
    Route::get('ranking','RankingController@index')->name('ranking.overall');
    Route::get('ranking/odai1', 'RankingController@show1')->name('ranking.show1');
    Route::get('ranking/odai2', 'RankingController@show2')->name('ranking.show2');
    Route::get('ranking/odai3', 'RankingController@show3')->name('ranking.show3'); 
    Route::get('ranking/odai4', 'RankingController@show4')->name('ranking.show4');
    Route::get('ranking/odai5', 'RankingController@show5')->name('ranking.show5');
    Route::get('ranking/odai6', 'RankingController@show6')->name('ranking.show6');
 });

 
     