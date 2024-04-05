<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountOverzichtController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('account.accountOverzicht', ['users' => $users]);
    }

    public function destroy($id)
    {
    $user = User::findOrFail($id); // Zoek de gebruiker op basis van de meegegeven ID
    $user->delete(); // Verwijder de gebruiker

    return redirect()->route('register')->with('success', 'Uw account is met succes verwijderd');
    }

    public function edit($id)
    {
    $user = User::findOrFail($id);
    return view('account.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->route('account')->with('success', 'Uw gegevens zijn bijgewerkt.');
    }
}
