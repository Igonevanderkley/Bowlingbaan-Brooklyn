

@extends('layouts.app')

@section('content')
    <h1>Overzicht Reserveringen</h1>

    <form action="{{ route('mijnReserveringen') }}" method="GET">
        <label for="vanafDatum">Vanaf Datum:</label>
        <input type="date" id="vanafDatum" name="vanafDatum" value="{{ old('vanafDatum', now()->subMonths(1)->format('Y-m-d')) }}">
        <button type="submit">Toon Reserveringen</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Datum</th>
                <th>Aantal Uren</th>
                <!-- Voeg hier andere kolommen toe die je wilt tonen -->
            </tr>
        </thead>
        <tbody>
            @foreach($reserveringen as $reservering)
                <tr>
                    <td>{{ $reservering->datum }}</td>
                    <td>{{ $reservering->aantalUren }}</td>
                    <!-- Voeg hier andere kolommen toe die je wilt tonen -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


