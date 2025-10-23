<!DOCTYPE html>
<html>
<head>
    <title>Users with Profile</title>
</head>
<body>
    <h2>User Profile List</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->profile->phone ?? 'No phone' }}</td>
                <td>{{ $user->profile->address ?? 'No address' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
