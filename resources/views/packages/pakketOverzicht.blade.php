<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Pakketten Overzicht') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-12 w-3/4 mx-auto">
        <a href= "{{ url('packages/create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
            style="float: right; margin:10px;">Toevoegen</a>
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-white-400 bg-white">
            <thead class="text-xs text-black uppercase bg-white-50 dark:bg-white-700 dark:text-black">
                <tr>
                    <th scope="col" class="px-6 py-3 w-3/4 text-black">Pakketten</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Naam</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Prijs</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Update</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Delete</th>

                <tr>
                    <td colspan="5">
                        <hr />
                    </td>
                </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $package)
                    <tr
                        class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 border-b dark:border-white-700">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                            {{ $package->name }}
                        </th>
                        <td class="px-6 py-4 text-black">{{ $package->description }}</td>
                        <td class="px-6 py-4 text-black">{{ $package->price }}</td>
                        <td class="px-6 py-4 text-black">
                            <a href="{{ route('packages.edit', $package->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Bewerk
                            </a>
                        </td>
                        <td class="px-6 py-4 text-black">
                            <form action="{{ route('packages.destroy', $package->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
