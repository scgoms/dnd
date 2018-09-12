<?php

namespace App\Http\Controllers;

class DiceController extends Controller
{
    public function show($dice)
    {
        return rand(1, $dice);
    }
}
