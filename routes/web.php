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

Route::get('/register/{hash}', 'Auth\RegisterController@showGameRegistrationForm');
Route::post('/register/{hash}', 'Auth\RegisterController@registerToGame');

Route::post('/game', 'GameController@store');
Route::get('/game/{game}', 'GameController@index');
Route::post('/game/{game}/invite', 'InvitationController@store');

Route::post('/invitation/{hash}/accept', 'InvitationController@accept');
Route::post('/invitation/{hash}/decline', 'InvitationController@decline');

Route::post('/game/{game}/messages', 'MessageController@receiveAndSend');
Route::post('/game/{game}/background', 'BackgroundController@receiveAndSend');
Route::get('/game/{game}/dice/{dice}', 'DiceController@show');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/games', 'ProfileController@games');
Route::get('/profile/characters', 'ProfileController@characters');
Route::post('/profile/characters', 'CharacterController@store');
