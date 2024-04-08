<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Details baannummer</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details baannummer') }}
            </h2>
        </x-slot>


        <form action="{{ route('update') }}" method="POST"> @csrf
                @method('PATCH')
            Baannummer: <select name="baannummer" id="baannummer">
                @foreach ($baanNummers as $nummer)
                    <option value="{{ $nummer->nummer }}" @if ($baanNummer == $nummer->nummer) selected @endif>
                        @php
                            $heeftHek = $nummer->heeftHek > 0 ? 'met hekje' : 'zonder hekje';
                        @endphp
                        baan: {{ $nummer->nummer }}, {{ $heeftHek }}
                    </option>
                @endforeach
            </select>

            <input type="hidden" id="reserveringId" name="reserveringId" value="{{ $reserveringId }}">
            <input type="hidden" id="persoonId" name="persoonId" value="{{ $persoonId }}">

            <button class="blue-button" type="submit">Wijzig</button>
        </form>
    </x-app-layout>

</body>

</html>
