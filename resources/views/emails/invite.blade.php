Dear {{ $invitation->email }},
<br/><br/>
You've been invited to join the game {{ $invitation->game->name }} by {{ $invitation->game->owner->name }}.<br/><br/>
You can join by clicking the below link </br><br/>
<a href="http://dnd.vm/register/{{ $invitation->hash }}">Join</a><br/><br/>
Thanks!
