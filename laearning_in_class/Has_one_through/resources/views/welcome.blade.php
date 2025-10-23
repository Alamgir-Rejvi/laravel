<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Has One Through</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Mechanic → Car → Owner (hasOneThrough)</h1>
    <table>
        <thead>
            <tr>
                <th>Mechanic</th>
                <th>Car Model</th>
                <th>Owner</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mechanics as $mechanic)
                <tr>
                    <td>{{ $mechanic->name }}</td>
                    <td>{{ optional($mechanic->car)->model ?? 'No car' }}</td>
                    <td>{{ optional($mechanic->owner)->name ?? 'No owner' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
