<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersoonController extends Controller
{
    public function index(Request $request): View
    {
        $date = $request->input('date');

        $uitslagen = DB::table('_Reservering')
            ->join('_Persoon', '_Reservering.PersoonId', '=', '_Persoon.Id')
            ->join('_Spel', '_Reservering.Id', '=', '_Spel.ReserveringId')
            ->join('Uitslagens', '_Spel.Id', '=', 'Uitslagens.SpelId')
            ->select(DB::raw('DATE(_Reservering.Datum) as Datum'), 'Uitslagens.Aantalpunten', '_Persoon.Voornaam', '_Persoon.Tussenvoegsel', '_Persoon.Achternaam');

        if ($date) {
            $uitslagen = $uitslagen->whereDate('_Reservering.Datum', '>=', date('Y-m-d', strtotime($date)));
        }

        $uitslagen = $uitslagen->groupBy('Datum', 'Uitslagens.Aantalpunten', '_Persoon.Voornaam', '_Persoon.Tussenvoegsel', '_Persoon.Achternaam')
            ->orderBy('Uitslagens.Aantalpunten', 'desc')
            ->get();

        return view('uitslagen.index', ['uitslagen' => $uitslagen]);
    }
}
