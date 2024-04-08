<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 leading-tight">
            {{ __('Detail uitslag') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('spelers.update', $speler->id) }}">
        @csrf
        @method('PUT')
        <div class="flex items-center mt-4">
            <label for="small-input" class="mr-2 text-sm font-medium text-white-900 dark:text-black">Aantalpunten:</label>
            <input type="text" id="small-input" name="aantalpunten" value="{{ $aantalpunten }}"
                class="w-50 p-2 text-black border border-white-300 rounded-lg bg-black-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-black-700 dark:border-white-600 dark:placeholder-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        @error('aantalpunten')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mt-2 ml-20">
            Update
        </button>
    </form>
</x-app-layout>
