<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>All Students</h1>
    <a href="{{ route('students.create') }}">+ Add New Student</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subjects</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>
                @foreach($student->subjects as $sub)
                    {{ $sub->name }} ({{ $sub->code }})<br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
