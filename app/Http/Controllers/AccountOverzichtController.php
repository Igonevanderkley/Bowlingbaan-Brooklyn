<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// Deze controller beheert de accountoverzichtpagina
class AccountOverzichtController extends Controller
{
    // Deze methode haalt alle gebruikers op en geeft ze door aan de accountoverzichtpagina
    public function index()
    {
        $users = User::all();
        return view('account.accountOverzicht', ['users' => $users]);
    }

    // Deze methode verwijdert een gebruiker op basis van het meegegeven ID
    public function destroy($id)
    {
    $user = User::findOrFail($id); // Zoek de gebruiker op basis van de meegegeven ID
    $user->delete(); // Verwijder de gebruiker

    return redirect()->route('register')->with('success', 'Uw account is met succes verwijderd');
    }

    // Deze methode haalt een gebruiker op basis van het meegegeven ID op en geeft deze door aan de bewerkpagina
    public function edit($id)
    {
    $user = User::findOrFail($id);
    return view('account.edit', ['user' => $user]);
    }

    // Deze methode werkt de gegevens van een gebruiker bij op basis van het meegegeven ID en de meegegeven gegevens
    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->route('account')->with('success', 'Uw gegevens zijn bijgewerkt.');
    }
}