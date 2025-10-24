<!DOCTYPE html>
<html>
<head>
    <title>Assign Roles</title>
</head>
<body>
    <h1>Assign Roles to User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label for="user_id">Select User:</label>
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="role_ids">Select Roles:</label>
        <br>
        @foreach($roles as $role)
            <input type="checkbox" name="role_ids[]" value="{{ $role->id }}"> {{ $role->name }} <br>
        @endforeach

        <br>
        <button type="submit">Assign</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">Back to List</a>
</body>
</html>
