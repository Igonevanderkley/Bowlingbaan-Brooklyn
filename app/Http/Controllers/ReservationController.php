<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            // Add validation rules for any other fields
        ]);

        // Store the reservation
        // You'll need to replace this with your own logic
        $reservation = new Reservation($data);
        $reservation->userId = auth()->id();
        $reservation->adults = $request->adults; 
        $reservation->fence= $request->adults; 
        $reservation->save();

        // Redirect the user to a success page
        return redirect()->route('overview', $reservation);
    }

    public function overview()
{
    // Get all reservations for the authenticated user
    $reservations = Reservation::where('userId', auth()->id())->get();
   


    // Return the overview view with the reservations
    return view('reservation.overview', compact('reservations'));
}

public function destroy(Reservation $reservation)
{
    $reservation->delete();

    return redirect()->route('overview');
}

public function edit(Reservation $reservation)
{
    return view('reservation/edit', compact('reservation'));
}

public function update(Request $request, Reservation $reservation)
{
    $validatedData = $request->validate([
        'userId' => 'required',
        'adults' => 'required',
        'children' => 'required',
        'packageId' => 'required',
        'fence' => 'required',
        'date' => 'required|date',
    ]);

    $reservation->update($validatedData);

    return redirect()->route('overview');
}
}