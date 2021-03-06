<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function home()
    {
        $players = Player::all();
        return view('home')->with([
            'players' => $players
        ]);
    }
}
