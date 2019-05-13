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

Route::get('/','Auth\LoginController@showLoginForm')->middleware('guest');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('cards','CardController@index')->name('cards');
Route::post('create', 'UsuairoController@create')->name('create');


Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::any('dashboard', array('as'=> 'dashboard', 'uses' => 'DashboardController@index'));
Route::any('cards', array('as'=> 'cards', 'uses' => 'CardController@index'));

Route::post('NewCard', 'CardController@store')->name('NewCard');
