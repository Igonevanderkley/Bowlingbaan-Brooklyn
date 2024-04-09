<?php


namespace App\Http\Controllers;

use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MijnReserveringenController extends Controller
{
    public function mijnReserveringen(Request $request)    
    {
         // Valideer het request
         $validator = Validator::make($request->all(), [
            'vanafDatum' => 'nullable|date',
        ]);
    
        // Als validatie mislukt, stuur terug naar vorige pagina met foutmeldingen
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Haal de vanaf datum op uit het request of gebruik een standaardwaarde
        $vanafDatum = $request->input('vanafDatum', now()->subMonths(1)->format('Y-m-d'));
    
        // Haal de reserveringen op die aan de persoon Mazin Jamil zijn gekoppeld
        $mijnReserveringen = Reservering::join('persoons', 'reserverings.persoonId', '=', 'persoons.id')
                                        ->where('persoons.voorNaam', 'Mazin')
                                        ->where('persoons.achterNaam', 'Jamil')
                                        ->where('reserverings.datum', '>=', $vanafDatum)
                                        ->orderBy('reserverings.datum', 'desc')
                                        ->get();
        if ($mijnReserveringen->isEmpty()) {
            // Toon de view met de reserveringen
            return redirect()->back()->withErrors(['Er zijn geen reserveringen gevonden voor Mazin Jamil vanaf de opgegeven datum.'])->withInput();
        }
        return view('account.mijnReserveringen', compact('mijnReserveringen', 'vanafDatum'));
    }
}