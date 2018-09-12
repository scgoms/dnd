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

Route::get('/', function () {
    return view('index');
});

Route::post('/game', function () {
    return;
});

Route::post('/messages', 'MessageController@receiveAndSend');

Route::post('/background', 'BackgroundController@receiveAndSend');

Route::get('/dice/{dice}', 'DiceController@show');

Route::get('/home', 'HomeController@index')->name('home');
