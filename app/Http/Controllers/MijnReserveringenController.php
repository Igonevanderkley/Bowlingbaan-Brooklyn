<?php

namespace App\Http\Controllers;
use App\Models\Reservering;
use Illuminate\Http\Request;

class MijnReserveringenController extends Controller
{
    public function mijnReserveringen(Request $request)
    {
        $vanafDatum = $request->input('vanafDatum', now()->subMonths(1)->format('Y-m-d'));
        $reserveringen = Reservering::where('datum', '>=', $vanafDatum)
            ->orderBy('datum', 'desc')
            ->get();

        return view('account.mijnReserveringen', compact('mijnReserveringen'));
    }
}
