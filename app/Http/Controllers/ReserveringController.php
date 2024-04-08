<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Reservering;
use App\Models\Persoon;
use App\Models\baan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReserveringController extends Controller
{

    public function showReservations($persoonId)
    {
        $reserveringen = Reservering::select('reservering.baanId', 'reservering.Id as reserveringId', 'persoon.id', 'persoon.voornaam', 'persoon.achternaam', 'datum', 'aantalUren', 'beginTijd', 'eindTijd', 'aantalVolwassenen', 'aantalKinderen')
            ->join('persoon', 'reservering.persoonId', '=', 'persoon.id')
            ->orderBy('datum', 'desc')
            ->where('persoon.id', $persoonId)
            ->get();

        $notification = null;


        return view('reserveringen.reserveringen', [
            'reserveringen' => $reserveringen,
            'notification' => $notification,
        ]);
    }


    public function filter(Request $request)
    {

        $persoonId = $request->input('persoonId');
        $startDatum = $request->input('startDatum');
        $eindDatum = Carbon::now();


        $reserveringen = Reservering::select('reservering.baanId', 'reservering.Id as reserveringId', 'persoon.id as persoonId', 'persoon.voornaam', 'persoon.achternaam', 'datum', 'aantalUren', 'beginTijd', 'eindTijd', 'aantalVolwassenen', 'aantalKinderen')
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


    public function showEdit($reserveringId, $baanNummer, $persoonId)
    {

        $baanNummers = baan::all();

        return view('reserveringen.edit', ['baanNummer' => $baanNummer, 'baanNummers' => $baanNummers, 'reserveringId' => $reserveringId, 'persoonId' => $persoonId]);
    }

    public function update(Request $request)
    {

        $persoonId = $request->input('persoonId');

        $reserveringen = Reservering::select('reservering.baanId', 'reservering.Id as reserveringId', 'persoon.id', 'persoon.voornaam', 'persoon.achternaam', 'datum', 'aantalUren', 'beginTijd', 'eindTijd', 'aantalVolwassenen', 'aantalKinderen')
            ->join('persoon', 'reservering.persoonId', '=', 'persoon.id')
            ->orderBy('datum', 'desc')
            ->where('persoon.id', $persoonId)
            ->get();


        $baanId = $request->input('baannummer');

        $aantalKinderen = Reservering::select('aantalKinderen')
            ->where('persoonId', $persoonId)
            ->get();

        if ($aantalKinderen !== null && $baanId < 6) {
            $notification = "Deze baan is ongeschikt voor kinderen omdat deze baan geen hekjes heeft (probeer opnieuw)";
            return view('reserveringen.reserveringen', [
                'reserveringen' => $reserveringen,
                'notification' => $notification
            ]);
        } else {
            $reserveringId = $request->input('reserveringId');
            $baanId = $request->input('baannummer');
            $persoonId = $request->input('persoonId');


            $reservering = Reservering::find($reserveringId);

            $reservering->baanId = $baanId;
            $reservering->save();


            $notification = "Het baannummer is succesvol gewijzigd";

            return view('reserveringen.reserveringen', [
                'reserveringen' => $reserveringen,
                'notification' => $notification
            ]);
        }
    }
}
