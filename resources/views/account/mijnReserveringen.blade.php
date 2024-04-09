<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Overzicht Reserveringen van Mazin Jamil') }}
        </h2>
    </x-slot>

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

        <!-- Toon foutmelding als er geen reserveringen zijn -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form class="w-full text-sm text-left rtl:text-right text-black dark:text-white-400 bg-white" action="{{ route('mijnReserveringen') }}" method="GET">
            @csrf
            <label for="vanafDatum">Vanaf Datum:</label>
            <input type="date" id="vanafDatum" name="vanafDatum" value="{{ $vanafDatum }}">
            <button type="submit" class="btn btn-outline-info">Toon Reserveringen</button>
        </form>

        @if(!$mijnReserveringen->isEmpty())     
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-white-400 bg-white">
                <thead>
                    <tr>
                        <th>Naam</th>
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
                <td>{{ $reservering->voorNaam }} {{ $reservering->achterNaam }}</td>
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
    @endif
</x-app-layout>
