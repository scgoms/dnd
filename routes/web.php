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

Auth::routes();

Route::get('/', 'PagesController@index');

Route::post('/messages', 'MessageController@receiveAndSend');
Route::post('/background', 'BackgroundController@receiveAndSend');
Route::get('/dice/{dice}', 'DiceController@show');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/lobbies', 'ProfileController@lobbies');
Route::get('/profile/characters', 'ProfileController@characters');
