<?php

namespace App\Http\Controllers;

class StatsController extends Controller
{
    public function create()
    {
        $stats = [];
        for ($i=0; $i<6; $i++) {
            $rolls = [];
            for ($j=0; $j<4; $j++) {
                $rolls[] = rand(1, 6);
            }
            rsort($rolls);
            unset($rolls[3]);
            $stats[] = array_sum($rolls);
        }
        return response()->json($stats);
    }
}
