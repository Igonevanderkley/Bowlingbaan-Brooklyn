<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Mijn Reserveringen') }}
        </h2>
    </x-slot>

    @section('content')
        <h1>Mijn Reserveringen</h1>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="GET" action="{{ route('mijnReserveringen') }}">
            <label for="vanafDatum">Vanaf datum:</label>
            <input type="date" id="vanafDatum" name="vanafDatum">
            <button type="submit">Toon reserveringen</button>
        </form>

        @if(isset($reserveringen))
            <!-- Hier kun je je reserveringen tonen -->
            @foreach ($reserveringen as $reservering)
                {{ $reservering->datum }} <!-- Voorbeeldweergave van een reservering -->
            @endforeach
        @else
            <p>Geen reserveringen gevonden.</p>
        @endif
    @endsection
</x-app-layout>

