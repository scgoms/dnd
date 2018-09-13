<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Fiddle with this alter on
Broadcast::channel('game.{id}.chat', function ($user, $id) {
    return true;
});

Broadcast::channel('game.{id}.background-image', function ($user, $id) {
    return true;
});
