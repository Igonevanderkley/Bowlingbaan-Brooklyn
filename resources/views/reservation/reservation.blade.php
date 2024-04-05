<!DOCTYPE html>
<html>
<head>
    <title>Make a Reservation</title>
</head>
<body>
    <h1>Make a Reservation</h1>

    <form method="POST" action="{{ route('reservations.store') }}">
        @csrf

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="adults">Adults:</label>
        <input type="number" id="adults" name="adults" required>

        <label for="children">Children:</label>
        <input type="number" id="children" name="children" required>

        <select id="packages" name="packages" required>
            <option value="">Select a package</option>
            <option value="package1">Package 1</option>
            <option value="package2">Package 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="fence">Fence:</label><br>
<input type="radio" id="fence1" name="fence" value="fence1" required>
<label for="fence1">Fence 1</label><br>
<input type="radio" id="fence2" name="fence" value="fence2">
<label for="fence2">Fence 2</label><br>
<!-- Add more options as needed -->


<button>submit</button>
    </form>
</body>
</html>