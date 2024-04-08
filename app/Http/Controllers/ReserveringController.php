<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Reservering;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReserveringController extends Controller
{

    public function showReservations($persoonId)
    {
        $reserveringen = Reservering::select('persoon.id', 'persoon.voornaam', 'persoon.achternaam', 'datum', 'aantalUren', 'beginTijd', 'eindTijd', 'aantalVolwassenen', 'aantalKinderen')
            ->join('persoon', 'reservering.persoonId', '=', 'persoon.id')
            ->orderBy('datum', 'desc')
            ->where('persoon.id', $persoonId)
            ->get();

        return view('reserveringen.reserveringen', [
            'reserveringen' => $reserveringen,
        ]);
    }


    public function filter(Request $request)
    {

        $persoonId = $request->input('persoonId');
        $startDatum = $request->input('startDatum');
        $eindDatum = Carbon::now();


        $reserveringen = Reservering::select('persoon.id as persoonId', 'persoon.voornaam', 'persoon.achternaam', 'datum', 'aantalUren', 'beginTijd', 'eindTijd', 'aantalVolwassenen', 'aantalKinderen')
        ->join('persoon', 'reservering.persoonId', '=', 'persoon.id')
        ->where('persoon.id', $persoonId)
            ->whereBetween('datum', [$startDatum, $eindDatum])
            ->orderBy('datum', 'desc')
            ->get();

        if ($reserveringen->isEmpty()) {
            $notification = "Er is geen informatie over deze periode";
        } else {
            $notification = null;
        }

        return view('reserveringen.reserveringen', [
            'reserveringen' => $reserveringen,
            'notification' => $notification,
        ]);

    }
}
