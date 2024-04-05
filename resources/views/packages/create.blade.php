<form method="POST" action="">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Naam
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="name" type="text" name="name">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Prijs
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="price" type="text" name="price">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Beschrijving
        </label>
        <textarea
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="description" name="description"></textarea>
    </div>
    <div class="flex items-center justify-between">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">
            Opslaan
        </button>
    </div>
</form>
