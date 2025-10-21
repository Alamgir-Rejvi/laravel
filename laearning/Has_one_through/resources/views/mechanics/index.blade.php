<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mechanic List (hasOneThrough)</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background: #f4f4f4; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Mechanic → Car → Owner (hasOneThrough)</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Mechanic</th>
                <th>Car Model</th>
                <th>Owner</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mechanics as $mechanic)
                <tr>
                    <td>{{ $mechanic->id }}</td>
                    <td>{{ $mechanic->name }}</td>
                    <td>{{ optional($mechanic->car)->model ?? 'No car' }}</td>
                    <td>{{ optional($mechanic->owner)->name ?? 'No owner' }}</td>
                    <td><a href="{{ route('mechanics.show', $mechanic->id) }}">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
