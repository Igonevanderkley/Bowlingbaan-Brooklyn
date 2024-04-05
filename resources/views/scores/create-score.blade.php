<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/scores.css">
</head>

<body>

    <x-app-layout>
        <form method="POST" action="{{ route('ScoresController.store') }}">
            @csrf

            <table>
                <thead>
                    <tr>
                        <th>naam</th>
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <th><?= $i ?></th>
                        <?php endfor ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <td>
                            <input type="number" id="score" name="score">
                            <input type="hidden" id="round" name="{{ $i }}" value="{{ $i }}">
                        </td>
                        <?php endfor ?>
                    </tr>

                    
                    <input id="reservationId" name="reservationId" type="hidden" value="{{ $reservationId }}">


                </tbody>


            </table>

            <button type="submit">Sla op</button>
        </form>

    </x-app-layout>
</body>

</html>
