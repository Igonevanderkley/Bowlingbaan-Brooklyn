<?php

namespace App\Http\Controllers;

use App\Models\ProductLeverancier;
use App\Models\Score;
use App\Models\Player;

use Illuminate\Http\Request;

class ScoresController extends Controller
{

    public function store(Request $request)
    {

        $name = $request->input('name');
        $reservationId = $request->input('reservationId');


        $scores = new Score();
        $player = new Player();

        $round = $request->input('round');



        $player->reservationId = $reservationId;
        $scores->round = $round;
        $player->name = $name;
        $player->save();
        $scores->save();

        return redirect('/scores/' . $reservationId);

    }
}
