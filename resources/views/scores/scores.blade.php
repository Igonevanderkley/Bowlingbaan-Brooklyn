<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/scores.css">
    <title>Document</title>
</head>

<body>

    <x-app-layout>

</html>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Scores') }}
    </h2>
</x-slot>
<a href="/create-score/{{ $reservationId }}">Nieuwe score</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>round</th>
            <th>score</th>
            <th>rank</th>
            <th>delete</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($scores as $score)
            <tr>
                <td>{{ $score->name }}</td>
                <td>{{ $score->round }}</td>
                <td>{{ $score->score }}</td>

                <td>{{ $loop->iteration }}</td>
                <td><a href="">x</a></td>
        </tr>

        </tr>
        @endforeach
    </tbody>
</table>

 

</x-app-layout>

</body>
