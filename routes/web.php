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

Route::post('/game', 'LobbyController@store');
Route::get('/game/{lobby}', 'LobbyController@index');

Route::post('/game/{lobby}/messages', 'MessageController@receiveAndSend');
Route::post('/game/{lobby}/background', 'BackgroundController@receiveAndSend');
Route::get('/game/{lobby}/dice/{dice}', 'DiceController@show');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/lobbies', 'ProfileController@lobbies');
Route::get('/profile/characters', 'ProfileController@characters');
