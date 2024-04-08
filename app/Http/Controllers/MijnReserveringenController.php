<?php


namespace App\Http\Controllers;

use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MijnReserveringenController extends Controller
{
    public function mijnReserveringen()
    {
        // Haal de reserveringen op die aan de persoon Mazin Jamil zijn gekoppeld
        $mijnReserveringen = Reservering::join('persoons', 'reserverings.persoonId', '=', 'persoons.id')
                                        ->where('persoons.voorNaam', 'Mazin')
                                        ->where('persoons.achterNaam', 'Jamil')
                                        ->orderBy('reserverings.datum', 'desc')
                                        ->get();

        // Geef de reserveringen door aan de view
        return view('account.mijnReserveringen', compact('mijnReserveringen'));
    }
}


