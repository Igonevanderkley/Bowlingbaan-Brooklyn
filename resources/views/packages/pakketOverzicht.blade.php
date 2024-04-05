<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Pakketten Overzicht') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-12 w-3/4 mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400 bg-white">
            <thead class="text-xs text-black uppercase bg-white-50 dark:bg-white-700 dark:text-black">
                <tr>
                    <th scope="col" class="px-6 py-3 w-3/4 text-black">Pakketten</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Update</th>
                    <th scope="col" class="px-6 py-3 w-1/8 text-black">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $package)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                            {{ $package->name }}
                        </th>
                        <td class="px-6 py-4 text-black">{{ $package->color }}</td>
                        <td class="px-6 py-4 text-black">{{ $package->category }}</td>
                        <td class="px-6 py-4 text-black">{{ $package->price }}</td>
                        <td class="px-6 py-4 text-black">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                        </td>
                        <td class="px-6 py-4 text-black">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
