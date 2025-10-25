<!DOCTYPE html>
<html>
<head>
    <title>User Role List</title>
</head>
<body>
    <h1>All Users with Roles</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach($user->roles as $role)
                            <span>{{ $role->name }}</span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('users.create') }}">Assign Roles</a>
</body>
</html>
