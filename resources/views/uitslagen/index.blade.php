<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht Uitslag') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto">
        <form method="GET" action="{{ route('uitslagen.index') }}" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 m-5" type="date" name="date" placeholder="Selecteer een datum"
                aria-label="Selecteer een datum">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Button
            </button>
        </form>
        <table class="w-full text-sm text-left rtl:text-right text-black">
            <thead class="text-xs text-black uppercase bg-white">
                <tr>
                    <hr>
                </tr>
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Voornaam
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        TussenVoegsel
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Achternaam
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Aantal Punten
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Datum
                </tr>
            </thead>

            <tbody>
                @foreach ($uitslagen as $uitslag)
                    <tr style="border-bottom: 0.5px solid #ddd;">
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $uitslag->Voornaam }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $uitslag->Tussenvoegsel }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $uitslag->Achternaam }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $uitslag->Aantalpunten }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $uitslag->Datum }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
