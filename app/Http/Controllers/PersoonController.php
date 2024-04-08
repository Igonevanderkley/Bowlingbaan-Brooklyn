<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersoonController extends Controller
{
    public function index(): View
    {

        $uitslagen = DB::table('uitslagens')
            ->join('_reservering', 'uitslagens.id', '=', '_reservering.uitslagens_id')
            ->join('_Persoon', 'uitslagens.id', '=', '_Persoon.uitslagens_id')
            ->select('uitslagens.*', '_reservering.datum', '_Persoon.Voornaam', '_Persoon.Tussenvoegsel', '_Persoon.Achternaam')
            ->get();

        return view('uitslagen.index', ['uitslagen' => $uitslagen]);
    }
}
