<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Persoonlijke gegevens') }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-12 w-3/4 mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-white-400 bg-white">
            <thead class="text-xs text-black uppercase bg-white-50 dark:bg-white-700 dark:text-black">
                <tr>
                    <th scope="col" class="px-6 py-3 w-3/4 text-black">Naam</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 border-b dark:border-white-700">
                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                        {{ $user->name }
                    </th>
                    <td class="px-6 py-4 text-black">{{ $user->email }}</td>
                    <td class="px-6 py-4 text-black">{{ $user->mobile }}</td>
                    <td class="px-6 py-4 text-black">
                        <!-- Edit knop -->
                        <a href="{{ route('account.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Edit
                        </a>
                    </td>
                    <td class="px-6 py-4 text-black">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>