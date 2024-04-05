<form action="{{ route('packages.edit', $package->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Naam:</label>
        <input type="text" name="name" id="name" value="{{ $package->name }}">
    </div>

    <div>
        <label for="description">Beschrijving:</label>
        <textarea name="description" id="description">{{ $package->description }}</textarea>
    </div>

    <div>
        <label for="price">Prijs:</label>
        <input type="text" name="price" id="price" value="{{ $package->price }}">
    </div>

    <button type="submit">Opslaan</button>
</form>
