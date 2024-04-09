<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>overzicht reserveringen</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Overzicht reserveringen') }}
            </h2>
        </x-slot>
    
        @if (session('success'))
            <h2 class="alert alert-success notification">
                {{ session('success') }}
            </h2>

            <script>
                setTimeout(function() {
                    document.querySelector('.notification').style.display = 'none';
                }, 3000); 
            </script>
        @endif


        @foreach ($reserveringen as $reservering)
            <div class="naam">
                <h2>Reserveringen van {{ $reservering->voornaam }} {{ $reservering->achternaam }}</h2>

                <form action="{{ route('filterReservations') }}" method="GET">
                    <input type="date" name="startDatum" id="startDatum">
                    <input type="hidden" name="persoonId" value="{{ $reservering->id }}">

                    <input type="hidden" name="reserveringId" value="{{ $reservering->reserveringId }}">

                    <button type="submit" class="blue-button">Toon reserveringen</button>
                </form>

            </div>
        @break
    @endforeach

    <table>
        <thead>
            <tr>
                <td>Naam</td>
                <td>Datum</td>
                <td>Aantal uren</td>
                <td>Begintijd</td>
                <td>Eindtijd</td>
                <td>Aantal volwassenen</td>
                <td>Aantal kinderen</td>
                <td>Baan</td>
                <td>Wijzig</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($reserveringen as $reservering)
                <tr>
                    <td>{{ $reservering->voornaam }}
                        {{ $reservering->achternaam }}
                    </td>
                    <td>{{ $reservering->datum }}</td>
                    <td>{{ $reservering->aantalUren }}</td>
                    <td>{{ $reservering->beginTijd }}</td>
                    <td>{{ $reservering->eindTijd }}</td>
                    <td>{{ $reservering->aantalVolwassenen }}</td>
                    <td>{{ $reservering->aantalKinderen }}</td>
                    <td>{{ $reservering->baanId }}</td>
                    <td>
                        <a
                            href="/edit/{{ $reservering->reserveringId }}/{{ $reservering->baanId }}/{{ $reservering->id }}"><img
                                src="/pencil.png" alt=""></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-app-layout>

</body>

</html>
