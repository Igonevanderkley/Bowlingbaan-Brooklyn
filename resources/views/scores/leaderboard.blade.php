    <x-app-layout>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scores.css">
    <title>Leaderboard</title>
</head>
<body>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
    </x-slot>

    <div class="table">
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Highscores</th>
            <th>Datum</th>
            <th>Rank</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($scores as $score)
            <tr>
                <td>{{ $score->player->name }}</td>
                <td>{{ $score->score }}</td>
                <td>{{ $score->created_at }}</td>
                <td>{{ $loop->iteration }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>





</body>
</html>

</x-app-layout>