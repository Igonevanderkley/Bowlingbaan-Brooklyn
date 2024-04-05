@extends('layouts.app')

@section('content')
    <h1>Edit Reservation</h1>

    <form action="{{ route('update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="userId">User ID</label>
            <input type="text" id="userId" name="userId" value="{{ $reservation->userId }}" required>
        </div>

        <div>
            <label for="adults">Adults</label>
            <input type="number" id="adults" name="adults" value="{{ $reservation->adults }}" required>
        </div>

        <div>
            <label for="children">Children</label>
            <input type="number" id="children" name="children" value="{{ $reservation->children }}" required>
        </div>

        <div>
            <label for="packageId">Package ID</label>
            <input type="text" id="packageId" name="packageId" value="{{ $reservation->packageId }}" required>
        </div>

        <div>
            <label for="fence">Fence</label>
            <input type="text" id="fence" name="fence" value="{{ $reservation->fence }}" required>
        </div>

        <!-- Rest of your form fields -->

        <button type="submit">Update Reservation</button>
    </form>
@endsection