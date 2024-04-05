<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        // haalt alle records op uit de 'packages' tabel
        $packages = Package::all();
        // geeft de view 'pakketOverzicht' door en geeft de variabele $packages mee
        return view('packages.pakketOverzicht', ['packages' => $packages]);
    }
    public function create()
    {
        $packages = Package::all(); // Haal alle pakketten op uit de database

        return view('packages.create', ['packages' => $packages]);
    }
    public function destroy($id)
    {
        // haalt het record op met het id uit de 'packages' tabel
        $package = Package::findOrFail($id);
        // verwijdert het record
        $package->delete();
        // redirect naar de index methode
        return redirect()->route('packages');
    }
    public function edit($id)
    {
        // Haal het pakket op met het opgegeven id
        $package = Package::findOrFail($id);

        // Geef het bewerkingsformulier door met het opgehaalde pakket
        return view('packages.edit', ['package' => $package]);
    }
    public function update(Request $request, $id)
    {
        // Valideer de ingediende gegevens
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Zoek het pakket met het opgegeven id
        $package = Package::findOrFail($id);

        // Werk de pakketgegevens bij
        $package->update($validatedData);

        // Redirect naar de pakketoverzichtspagina
        return redirect()->route('packages.index');
    }
}
