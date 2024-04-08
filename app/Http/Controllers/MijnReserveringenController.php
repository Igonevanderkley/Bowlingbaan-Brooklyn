<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// Deze controller beheert de accountoverzichtpagina
class MijnReserveringenController extends Controller
{
    public function mijnReserveringen(Request $request)
    {
        
        $vanafDatum = $request->input('vanafDatum');

        if (!$vanafDatum) {
            return redirect()->back()->with('error', 'Er is geen informatie over deze periode');
        }

        $reserveringen = DB::table('reservering')
            ->where('persoonId', auth()->id())
            ->whereDate('datum', '>=', $vanafDatum)
            ->orderBy('datum', 'desc')
            ->get();

        return view('account.mijnReserveringen', ['reserveringen' => $reserveringen]);
    }
}