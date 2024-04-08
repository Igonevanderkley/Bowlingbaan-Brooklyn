<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Mijn Reserveringen') }}
        </h2>
    </x-slot>

    @section('content')
        <h1>Overzicht Reserveringen</h1>

        <!-- Toon validatiefouten -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mijnReserveringen') }}" method="GET">
            <label for="vanafDatum">Vanaf Datum:</label>
            <input type="date" id="vanafDatum" name="vanafDatum" value="{{ old('vanafDatum', now()->subMonths(1)->format('Y-m-d')) }}">
            <button type="submit">Toon Reserveringen</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Reserveringsnummer</th>
                    <th>Datum</th>
                    <th>Aantal Uren</th>
                    <th>Begin Tijd</th>
                    <th>Eind Tijd</th>
                    <th>Aantal Volwassenen</th>
                    <th>Aantal Kinderen</th>
                    <!-- Voeg hier andere kolommen toe die je wilt tonen -->
                </tr>
            </thead>
            <tbody>
            @foreach($mijnReserveringen as $reservering)
                <tr>
                    <td>{{ $reservering->reserveringsNummer }}</td>
                    <td>{{ $reservering->datum }}</td>
                    <td>{{ $reservering->aantalUren }}</td>
                    <td>{{ $reservering->beginTijd }}</td>
                    <td>{{ $reservering->eindTijd }}</td>
                    <td>{{ $reservering->aantalVolwassen }}</td>
                    <td>{{ $reservering->aantalKinderen }}</td>
                    <!-- Voeg hier andere kolommen toe die je wilt tonen -->
                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
</x-app-layout>
