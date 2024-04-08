<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht Spelers') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto">
        @if (session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('success-alert').style.display = 'none';
                }, 3000);
            </script>
        @endif
        <table class="w-full text-sm text-left rtl:text-right text-black">
            <thead class="text-xs text-black uppercase bg-white">
                <tr>
                    <hr>
                </tr>
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Naam
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Aantal Punten
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        ReserveringId
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold">
                        Wijzigen
                    </th>
                </tr>

            </thead>

            <tbody>
                @foreach ($spelers as $speler)
                    <tr style="border-bottom: 0.5px solid #ddd;">
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $speler->Naam }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $speler->Aantalpunten }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $speler->ReserveringId }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('spelers.detail', $speler->id) }}"
                                class="text-indigo-600 hover:text-indigo-900">Wijzigen</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
