<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomeData()
    {
        // Puedes obtener datos de jugadores, equipos, etc.
        $players = [
            ['name' => 'Lionel Messi', 'position' => 'Forward', 'team' => 'PSG'],
            ['name' => 'Cristiano Ronaldo', 'position' => 'Forward', 'team' => 'Al Nassr'],
            // Agrega más jugadores
        ];

        $teams = [
            ['name' => 'Barcelona', 'country' => 'Spain'],
            ['name' => 'Manchester United', 'country' => 'England'],
            // Agrega más equipos
        ];

        return response()->json([
            'players' => $players,
            'teams' => $teams,
        ]);
    }
}
