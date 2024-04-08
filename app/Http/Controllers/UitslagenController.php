<?php

namespace App\Http\Controllers;

use App\Models\Uitslagen;
use App\Models\Persoon;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UitslagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('uitslagen.index', [
            'uitslagen' => Persoon::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Uitslagen $uitslagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Uitslagen $uitslagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Uitslagen $uitslagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Uitslagen $uitslagen)
    {
        //
    }
}
