<?php

namespace App\Http\Controllers;

use App\Models\Speler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpelerController extends Controller
{
    public function index()
    {
        $spelers = DB::table('_Reservering')
            ->join('_Persoon', '_Reservering.PersoonId', '=', '_Persoon.Id')
            ->join('_Spel', '_Reservering.Id', '=', '_Spel.ReserveringId')
            ->join('Uitslagens', '_Spel.Id', '=', 'Uitslagens.SpelId')
            ->select(DB::raw('CONCAT(_Persoon.Voornaam, " ", COALESCE(_Persoon.Tussenvoegsel, ""), " ", _Persoon.Achternaam) AS Naam'), 'Uitslagens.Aantalpunten', '_Reservering.Id as ReserveringId', '_Persoon.Id as id')
            ->get();

        return view('spelers.index', ['spelers' => $spelers]);
    }
    public function show($id)
    {
        $speler = DB::table('_Persoon')->where('Id', $id)->first();

        $aantalpunten = DB::table('Uitslagens')
            ->join('_Spel', 'Uitslagens.SpelId', '=', '_Spel.Id')
            ->join('_Reservering', '_Spel.ReserveringId', '=', '_Reservering.Id')
            ->where('_Reservering.PersoonId', $id)
            ->value('Aantalpunten');

        return view('spelers.detail', ['speler' => $speler, 'aantalpunten' => $aantalpunten]);
    }
    public function update(Request $request, $id)
    {
        $messages = [
            'aantalpunten.max' => 'Het aantal punten is niet geldig, voer een waarde in kleiner of gelijk aan 300.',
        ];

        $validatedData = $request->validate([
            'aantalpunten' => 'required|integer|max:300',
        ], $messages);

        $aantalpunten = $validatedData['aantalpunten'];

        DB::table('Uitslagens')
            ->join('_Spel', 'Uitslagens.SpelId', '=', '_Spel.Id')
            ->join('_Reservering', '_Spel.ReserveringId', '=', '_Reservering.Id')
            ->where('_Reservering.PersoonId', $id)
            ->update(['Aantalpunten' => $aantalpunten]);

        return redirect()->route('spelers.index')->with('success', 'Het aantal punten is gewijzigd');
    }
}
