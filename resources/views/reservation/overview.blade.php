<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Package ID</th>
            <th>Fence</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->adults }}</td>
                <td>{{ $reservation->children }}</td>
                <td>{{ $reservation->packageId }}</td>
                <td>{{ $reservation->fence ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('edit', $reservation) }}">Edit</a>

                    <form method="POST" action="{{ route('destroy', $reservation) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>