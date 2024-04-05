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
}
