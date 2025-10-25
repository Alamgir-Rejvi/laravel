<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Subjects:</label><br>
        @foreach($subjects as $subject)
            <input type="checkbox" name="subjects[]" value="{{ $subject->id }}">
            {{ $subject->name }} ({{ $subject->code }}) <br>
        @endforeach

        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
