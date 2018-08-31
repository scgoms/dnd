<?php

namespace App;

class Message
{
    public $body;
    public $user;

    public function __construct($body, $user)
    {
        $this->body = $body;
        $this->user = $user;
    }
}
