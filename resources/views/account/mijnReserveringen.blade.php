
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Bewerk je gegevens') }}
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
        
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Bewerk je gegevens') }}
        </h2>
    </x-slot>


    @extends('layouts.app')

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

    
@endsection
    
</x-app-layout>

    @endsection
</x-app-layout>
