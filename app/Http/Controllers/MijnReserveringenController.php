<?php

namespace App\Http\Controllers;
use App\Models\Reservering;
use Illuminate\Http\Request;

class MijnReserveringenController extends Controller
{
    public function mijnReserveringen()
{
    $mijnReserveringen = Reservering::all(); // Of gebruik een query om de reserveringen op te halen
    return view('account.mijnReserveringen', compact('mijnReserveringen'));
}
}

